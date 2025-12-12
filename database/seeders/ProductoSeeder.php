<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            // Diagnostico
            [
                'codigo' => 'PROD-001',
                'nombre' => 'Estetoscopio Digital',
                'marca' => 'Littmann',
                'categoria' => 'diagnostico',
                'zona' => 'cardiovascular',
                'precio' => 350.00,
                'descripcion' => 'Estetoscopio digital de alta precisión con tecnología de ruido ambiental reducido',
                'imagen' => 'uploads/productos/estetoscopio.jpg'
            ],
            [
                'codigo' => 'PROD-002',
                'nombre' => 'Monitor de Presión Arterial',
                'marca' => 'Omron',
                'categoria' => 'diagnostico',
                'zona' => 'cardiovascular',
                'precio' => 250.00,
                'descripcion' => 'Monitor automático de presión arterial con precisión clínica',
                'imagen' => 'uploads/productos/monitor-pa.jpg'
            ],
            [
                'codigo' => 'PROD-003',
                'nombre' => 'Glucómetro Digital',
                'marca' => 'Accu-Chek',
                'categoria' => 'diagnostico',
                'zona' => 'cardiovascular',
                'precio' => 45.00,
                'descripcion' => 'Medidor de glucosa en sangre con pruebas rápidas',
                'imagen' => 'uploads/productos/glucometro.jpg'
            ],
            [
                'codigo' => 'PROD-004',
                'nombre' => 'Oxímetro de Pulso',
                'marca' => 'Nellcor',
                'categoria' => 'diagnostico',
                'zona' => 'respiratorio',
                'precio' => 120.00,
                'descripcion' => 'Oxímetro portátil para medir saturación de oxígeno',
                'imagen' => 'uploads/productos/oximetro.jpg'
            ],
            // Cirugía
            [
                'codigo' => 'PROD-005',
                'nombre' => 'Kit de Cirugía Básica',
                'marca' => 'Medline',
                'categoria' => 'cirugia',
                'zona' => 'musculoesqueletico',
                'precio' => 890.00,
                'descripcion' => 'Set completo de instrumentos quirúrgicos básicos esterilizados',
                'imagen' => 'uploads/productos/kit-cirugia.jpg'
            ],
            [
                'codigo' => 'PROD-006',
                'nombre' => 'Lámpara Quirúrgica LED',
                'marca' => 'Karl Storz',
                'categoria' => 'cirugia',
                'zona' => 'musculoesqueletico',
                'precio' => 2500.00,
                'descripcion' => 'Lámpara de quirófano con tecnología LED de alta intensidad',
                'imagen' => 'uploads/productos/lampara-quirurgica.jpg'
            ],
            [
                'codigo' => 'PROD-007',
                'nombre' => 'Electrobisturí',
                'marca' => 'ERBE',
                'categoria' => 'cirugia',
                'zona' => 'musculoesqueletico',
                'precio' => 3500.00,
                'descripcion' => 'Bisturí eléctrico monopolar y bipolar profesional',
                'imagen' => 'uploads/productos/electrobisturi.jpg'
            ],
            // Laboratorio
            [
                'codigo' => 'PROD-008',
                'nombre' => 'Microscopio Clínico',
                'marca' => 'Leica',
                'categoria' => 'laboratorio',
                'zona' => 'cardiovascular',
                'precio' => 4500.00,
                'descripcion' => 'Microscopio binocular para análisis clínico de muestras',
                'imagen' => 'uploads/productos/microscopio.jpg'
            ],
            [
                'codigo' => 'PROD-009',
                'nombre' => 'Centrifuga de Laboratorio',
                'marca' => 'Hettich',
                'categoria' => 'laboratorio',
                'zona' => 'cardiovascular',
                'precio' => 2200.00,
                'descripcion' => 'Centrífuga de banco con capacidad de 24 tubos',
                'imagen' => 'uploads/productos/centrifuga.jpg'
            ],
            [
                'codigo' => 'PROD-010',
                'nombre' => 'Pipetas Automáticas Set',
                'marca' => 'Eppendorf',
                'categoria' => 'laboratorio',
                'zona' => 'cardiovascular',
                'precio' => 1800.00,
                'descripcion' => 'Set de pipetas automáticas de precisión 0.5-1000 µL',
                'imagen' => 'uploads/productos/pipetas.jpg'
            ],
            // Urgencias
            [
                'codigo' => 'PROD-011',
                'nombre' => 'Desfibrilador Externo',
                'marca' => 'Philips',
                'categoria' => 'urgencias',
                'zona' => 'cardiovascular',
                'precio' => 5000.00,
                'descripcion' => 'DEA semiautomático para emergencias cardíacas',
                'imagen' => 'uploads/productos/desfibrilador.jpg'
            ],
            [
                'codigo' => 'PROD-012',
                'nombre' => 'Bolsa de Ambu',
                'marca' => 'Ambu',
                'categoria' => 'urgencias',
                'zona' => 'respiratorio',
                'precio' => 180.00,
                'descripcion' => 'Bolsa de reanimación manual adulto/niño/bebé',
                'imagen' => 'uploads/productos/bolsa-ambu.jpg'
            ],
            [
                'codigo' => 'PROD-013',
                'nombre' => 'Kit de Intubación',
                'marca' => 'Medtronic',
                'categoria' => 'urgencias',
                'zona' => 'respiratorio',
                'precio' => 950.00,
                'descripcion' => 'Set completo de tubos endotraqueales y accesorios',
                'imagen' => 'uploads/productos/kit-intubacion.jpg'
            ],
            // Rehabilitación
            [
                'codigo' => 'PROD-014',
                'nombre' => 'Bicicleta Estática Médica',
                'marca' => 'Lode',
                'categoria' => 'rehabilitacion',
                'zona' => 'musculoesqueletico',
                'precio' => 3200.00,
                'descripcion' => 'Bicicleta ergométrica para fisioterapia y rehabilitación',
                'imagen' => 'uploads/productos/bicicleta-estatica.jpg'
            ],
            [
                'codigo' => 'PROD-015',
                'nombre' => 'Banda Caminadora Médica',
                'marca' => 'Technogym',
                'categoria' => 'rehabilitacion',
                'zona' => 'musculoesqueletico',
                'precio' => 4800.00,
                'descripcion' => 'Caminadora profesional con programas de rehabilitación',
                'imagen' => 'uploads/productos/banda-caminadora.jpg'
            ],
            [
                'codigo' => 'PROD-016',
                'nombre' => 'TENS Electroestimulador',
                'marca' => 'COMPEX',
                'categoria' => 'rehabilitacion',
                'zona' => 'musculoesqueletico',
                'precio' => 320.00,
                'descripcion' => 'Equipo TENS para estimulación nerviosa transcutánea',
                'imagen' => 'uploads/productos/tens.jpg'
            ],
            // Imagenología
            [
                'codigo' => 'PROD-017',
                'nombre' => 'Ecógrafo Portátil',
                'marca' => 'GE Healthcare',
                'categoria' => 'imagenologia',
                'zona' => 'cardiovascular',
                'precio' => 8500.00,
                'descripcion' => 'Ecógrafo de mano con pantalla digital HD',
                'imagen' => 'uploads/productos/ecografo.jpg'
            ],
            [
                'codigo' => 'PROD-018',
                'nombre' => 'Negatoscopio LED',
                'marca' => 'Euroclips',
                'categoria' => 'imagenologia',
                'zona' => 'respiratorio',
                'precio' => 450.00,
                'descripcion' => 'Visualizador de radiografías con iluminación LED',
                'imagen' => 'uploads/productos/negatoscopio.jpg'
            ],
            [
                'codigo' => 'PROD-019',
                'nombre' => 'Silla de Ruedas Manual',
                'marca' => 'XB',
                'categoria' => 'rehabilitacion',
                'zona' => 'musculoesqueletico',
                'precio' => 450.00,
                'descripcion' => 'Silla de ruedas plegable ultraligera de aluminio',
                'imagen' => 'uploads/productos/xb-silla de ruedas.jpg'
            ],
        ];

        // Insertar productos
        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
