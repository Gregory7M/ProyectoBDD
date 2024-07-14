<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puesto;

class PuestosTableSeeder extends Seeder
{
    public function run()
    {
        Puesto::create([
            'Ubicacion' => 'A1',
            'Estado' => 'Disponible',
            'Precio_Alquiler' => 150.00,
            'Concesionario' => 'Juan Pérez',
            'Contacto' => '555-1234',
            'Productos' => 'Frutas y Verduras',
            'Fecha_Ingreso' => '2024-07-01',
            'Fecha_Salida' => null
        ]);

        // Agregar más puestos de ejemplo según sea necesario
    }
}
