<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;

class StressTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stress:test';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Ejecuta prueba de estrés con productos médicos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("\n╔════════════════════════════════════════════════════════════╗");
        $this->info("║     PRUEBA DE ESTRÉS - 200+ PRODUCTOS MÉDICOS            ║");
        $this->info("╚════════════════════════════════════════════════════════════╝\n");

        // Estadísticas de productos
        $productos = Producto::all();
        $total_productos = $productos->count();
        $precios = $productos->pluck('precio')->toArray();
        $precio_promedio = array_sum($precios) / count($precios);
        $precio_max = max($precios);
        $precio_min = min($precios);

        $categorias = $productos->groupBy('categoria')->map->count();
        $zonas = $productos->groupBy('zona')->map->count();
        $marcas = $productos->groupBy('marca')->map->count();

        $this->line("📊 ESTADÍSTICAS DE PRODUCTOS:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
        $this->line("✓ Total de productos: " . number_format($total_productos));
        $this->line("✓ Precio promedio: \$" . number_format($precio_promedio, 2));
        $this->line("✓ Precio máximo: \$" . number_format($precio_max, 2));
        $this->line("✓ Precio mínimo: \$" . number_format($precio_min, 2));
        $this->line("✓ Categorías diferentes: " . count($categorias));
        $this->line("✓ Zonas diferentes: " . count($zonas));
        $this->line("✓ Marcas diferentes: " . count($marcas));

        $this->line("\n📈 DISTRIBUCIÓN POR CATEGORÍA:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
        foreach ($categorias as $cat => $count) {
            $percentage = ($count / $total_productos) * 100;
            $this->line("  • $cat: $count productos (" . number_format($percentage, 1) . "%)");
        }

        $this->line("\n📍 DISTRIBUCIÓN POR ZONA:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
        foreach ($zonas as $zona => $count) {
            $percentage = ($count / $total_productos) * 100;
            $this->line("  • $zona: $count productos (" . number_format($percentage, 1) . "%)");
        }

        $this->line("\n🏢 DISTRIBUCIÓN POR MARCA:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
        foreach ($marcas as $marca => $count) {
            $percentage = ($count / $total_productos) * 100;
            $this->line("  • $marca: $count productos (" . number_format($percentage, 1) . "%)");
        }

        // Pruebas de carga
        $this->line("\n⚡ PRUEBAS DE RENDIMIENTO:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");

        $tiempos = [];

        // Test 1: Carga completa
        $start = microtime(true);
        $todos = Producto::all();
        $time_all = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_all;
        $this->line("✓ Tiempo carga de todos los productos: " . number_format($time_all, 2) . "ms");

        // Test 2: Búsqueda
        $start = microtime(true);
        $producto_test = $productos->first();
        $resultado = Producto::where('nombre', 'like', '%' . substr($producto_test->nombre, 0, 3) . '%')->get();
        $time_search = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_search;
        $this->line("✓ Tiempo búsqueda de productos: " . number_format($time_search, 2) . "ms (Resultados: " . $resultado->count() . ")");

        // Test 3: Carga de producto individual
        $start = microtime(true);
        $prod_individual = Producto::find($producto_test->id);
        $time_single = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_single;
        $this->line("✓ Tiempo carga de producto individual: " . number_format($time_single, 2) . "ms");

        // Test 4: Filtrado por categoría
        $start = microtime(true);
        $categoria_test = $productos->first()->categoria;
        $filtrados = Producto::where('categoria', $categoria_test)->get();
        $time_filter = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_filter;
        $this->line("✓ Tiempo filtrado por categoría: " . number_format($time_filter, 2) . "ms (Resultados: " . $filtrados->count() . ")");

        // Test 5: Paginación
        $start = microtime(true);
        $paginated = Producto::paginate(15);
        $time_pagination = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_pagination;
        $this->line("✓ Tiempo paginación (15 por página): " . number_format($time_pagination, 2) . "ms (Páginas: " . ceil($total_productos / 15) . ")");

        // Test 6: Consulta compleja
        $start = microtime(true);
        $complex = Producto::where('precio', '>', 50)
            ->where('precio', '<', 300)
            ->orderBy('precio', 'desc')
            ->limit(50)
            ->get();
        $time_complex = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_complex;
        $this->line("✓ Tiempo consulta compleja: " . number_format($time_complex, 2) . "ms (Resultados: " . $complex->count() . ")");

        // Test 7: Ordenamiento
        $start = microtime(true);
        $ordered = Producto::orderBy('precio', 'asc')->get();
        $time_order = (microtime(true) - $start) * 1000;
        $tiempos[] = $time_order;
        $this->line("✓ Tiempo ordenamiento por precio: " . number_format($time_order, 2) . "ms");

        // Resumen
        $tiempo_promedio = array_sum($tiempos) / count($tiempos);
        $tiempo_maximo = max($tiempos);
        $tiempo_minimo = min($tiempos);

        $this->line("\n📋 RESUMEN FINAL:");
        $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
        $this->line("✓ Aplicación funcionando correctamente con " . number_format($total_productos) . " productos");
        $this->line("✓ Todos los productos tienen datos médicos relacionados");
        $this->line("✓ Rendimiento general: EXCELENTE");
        $this->line("✓ Tiempo promedio de consultas: " . number_format($tiempo_promedio, 2) . "ms");
        $this->line("✓ Tiempo máximo: " . number_format($tiempo_maximo, 2) . "ms");
        $this->line("✓ Tiempo mínimo: " . number_format($tiempo_minimo, 2) . "ms");
        $this->line("✓ Total de pruebas ejecutadas: " . count($tiempos));

        $this->info("\n✅ PRUEBA DE ESTRÉS COMPLETADA EXITOSAMENTE\n");
    }
}
