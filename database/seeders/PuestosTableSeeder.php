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

        Puesto::create([
            'Ubicacion' => 'B2',
            'Estado' => 'Ocupado',
            'Precio_Alquiler' => 200.00,
            'Concesionario' => 'María Gómez',
            'Contacto' => '555-5678',
            'Productos' => 'Carnes y Pescados',
            'Fecha_Ingreso' => '2024-06-15',
            'Fecha_Salida' => '2024-12-15'
        ]);

        Puesto::create([
            'Ubicacion' => 'D4',
            'Estado' => 'Ocupado',
            'Precio_Alquiler' => 250.00,
            'Concesionario' => 'Ana López',
            'Contacto' => '555-4321',
            'Productos' => 'Electrónicos',
            'Fecha_Ingreso' => '2024-05-10',
            'Fecha_Salida' => '2024-11-10'
        ]);
    }
}
