<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    private $productos_medicos = [
        [
            'nombre' => 'Tensiómetro Digital',
            'descripcion' => 'Tensiómetro digital automático de brazo con pantalla LCD',
            'imagen' => 'tensiometro.jpg'
        ],
        [
            'nombre' => 'Termómetro Infrarrojo',
            'descripcion' => 'Termómetro infrarrojo sin contacto para medir temperatura corporal',
            'imagen' => 'termometro.jpg'
        ],
        [
            'nombre' => 'Oxímetro de Pulso',
            'descripcion' => 'Oxímetro portátil para medir saturación de oxígeno en sangre',
            'imagen' => 'oximetro.jpg'
        ],
        [
            'nombre' => 'Estetoscopio',
            'descripcion' => 'Estetoscopio de doble campana para auscultación médica',
            'imagen' => 'estetoscopio.jpg'
        ],
        [
            'nombre' => 'Balanza Digital',
            'descripcion' => 'Balanza digital de piso para medición de peso corporal',
            'imagen' => 'balanza.jpg'
        ],
        [
            'nombre' => 'Glucómetro',
            'descripcion' => 'Glucómetro digital para medir niveles de glucosa en sangre',
            'imagen' => 'glucometro.jpg'
        ],
        [
            'nombre' => 'Inhalador Nebulizador',
            'descripcion' => 'Nebulizador portátil para inhalación de medicamentos',
            'imagen' => 'nebulizador.jpg'
        ],
        [
            'nombre' => 'Cabestrillo',
            'descripcion' => 'Cabestrillo de sujeción para brazos y hombros',
            'imagen' => 'cabestrillo.jpg'
        ],
        [
            'nombre' => 'Vendas Elásticas',
            'descripcion' => 'Vendas elásticas compresivas para soporte articular',
            'imagen' => 'vendas.jpg'
        ],
        [
            'nombre' => 'Guantes Quirúrgicos',
            'descripcion' => 'Guantes estériles de látex para procedimientos médicos',
            'imagen' => 'guantes.jpg'
        ],
        [
            'nombre' => 'Máscaras Médicas',
            'descripcion' => 'Máscaras de protección médica de 3 capas',
            'imagen' => 'mascaras.jpg'
        ],
        [
            'nombre' => 'Jeringas Hipodérmicas',
            'descripcion' => 'Jeringas estériles desechables de diversos tamaños',
            'imagen' => 'jeringas.jpg'
        ],
        [
            'nombre' => 'Agujas Médicas',
            'descripcion' => 'Agujas de diferentes calibres para procedimientos médicos',
            'imagen' => 'agujas.jpg'
        ],
        [
            'nombre' => 'Vendaje Quirúrgico',
            'descripcion' => 'Vendajes estériles para curación de heridas',
            'imagen' => 'vendajes.jpg'
        ],
        [
            'nombre' => 'Algodón Médico',
            'descripcion' => 'Algodón hipoalergénico estéril para limpieza de heridas',
            'imagen' => 'algodon.jpg'
        ],
        [
            'nombre' => 'Antiséptico',
            'descripcion' => 'Solución antiséptica para desinfección de heridas',
            'imagen' => 'antiseptico.jpg'
        ],
        [
            'nombre' => 'Desinfectante Clínico',
            'descripcion' => 'Desinfectante de alcohol para equipos médicos',
            'imagen' => 'desinfectante.jpg'
        ],
        [
            'nombre' => 'Linterna Clínica',
            'descripcion' => 'Linterna LED para examen oftalmológico',
            'imagen' => 'linterna.jpg'
        ],
        [
            'nombre' => 'Depresores Linguales',
            'descripcion' => 'Depresores de madera para examen de garganta',
            'imagen' => 'depresores.jpg'
        ],
        [
            'nombre' => 'Termómetro Clínico',
            'descripcion' => 'Termómetro clínico de mercurio para medir temperatura',
            'imagen' => 'termometro_clinico.jpg'
        ],
    ];

    private $categorias = ['Monitoreo', 'Suministros', 'Equipo', 'Curaciones', 'Protección'];
    private $zonas = ['Zona A', 'Zona B', 'Zona C', 'Zona D'];
    private $marcas = ['MediCare', 'HealthPro', 'ClinicalMax', 'MedicalPro', 'SaludTech'];

    public function definition(): array
    {
        $producto = collect($this->productos_medicos)->random();
        
        return [
            'codigo' => 'MED-' . rand(100000, 999999),
            'nombre' => $producto['nombre'],
            'marca' => collect($this->marcas)->random(),
            'categoria' => collect($this->categorias)->random(),
            'zona' => collect($this->zonas)->random(),
            'precio' => rand(1000, 50000) / 100,
            'descripcion' => $producto['descripcion'],
            'imagen' => $producto['imagen'],
        ];
    }
}
