<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class WebController extends Controller
{
    /**
     * Mostrar la página principal con el catálogo de productos
     */
    public function index(Request $request)
    {
        $query = Producto::query();
        
        // Búsqueda por nombre
        if ($request->has('search') && $request->search) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        // Filtro de orden (Ordenar por precio)
        if ($request->has('sort') && $request->sort) {
            switch ($request->sort) {
                case 'priceAsc':
                    $query->orderBy('precio', 'asc');
                    break;
                case 'priceDesc':
                    $query->orderBy('precio', 'desc');
                    break;
                default:
                    $query->orderBy('nombre', 'asc');
                    break;
            }
        }

        // Obtener productos en formato JSON para JavaScript
        $productosDb = $query->get();
        
        $productos = $productosDb->map(function ($producto) {
            // Manejar la URL de la imagen
            $imagen = $producto->imagen;
            if ($imagen && !str_starts_with($imagen, 'http')) {
                // Si es una imagen local, ya no agregamos la ruta aquí
                // porque JavaScript lo hará
                $imagen = $producto->imagen;
            }
            
            return [
                'id' => $producto->id,
                'name' => $producto->nombre,
                'brand' => $producto->marca ?? 'Medical Brand',
                'category' => $producto->categoria ?? 'diagnostico',
                'zone' => $producto->zona ?? 'cardiovascular',
                'price' => (float)$producto->precio,
                'image' => $imagen,
                'description' => $producto->descripcion ?? 'Producto médico de calidad certificada',
                'specs' => is_array($producto->especificaciones) ? $producto->especificaciones : []
            ];
        })->toArray();

        // Obtener marcas únicas
        $marcas = Producto::whereNotNull('marca')
            ->distinct()
            ->pluck('marca')
            ->toArray();

        // Estadísticas
        $stats = [
            'productos_count' => $productosDb->count(),
            'clientes' => '1,000+',
        ];

        return view('web.index', compact('productos', 'marcas', 'stats'));
    }

    /**
     * Mostrar detalle de un producto
     */
    public function show($id)
    {
        // Obtener el producto por ID
        $producto = Producto::findOrFail($id);
        
        // Pasar el producto a la vista
        return view('web.item', compact('producto'));
    }
}
