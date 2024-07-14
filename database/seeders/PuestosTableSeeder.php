<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puesto;

class PuestosTableSeeder extends Seeder
{
    public function run()
    {
        Puesto::create([
            'Ubicacion' => 'Zona A1',
            'Estado' => 'disponible',
            'Precio_Alquiler' => 100.00,
            'Concesionario' => 'Juan Pérez',
            'Contacto' => '555-1234',
            'Productos' => 'Frutas y Verduras',
            'Fecha_Ingreso' => '2024-07-01',
            'Fecha_Salida' => null
        ]);

        Puesto::create([
            'Ubicacion' => 'Zona A2',
            'Estado' => 'ocupado',
            'Precio_Alquiler' => 150.00,
            'Concesionario' => 'María López',
            'Contacto' => '555-5678',
            'Productos' => 'Carnes y Pescados',
            'Fecha_Ingreso' => '2024-07-10',
            'Fecha_Salida' => null
        ]);

        Puesto::create([
            'Ubicacion' => 'Zona B1',
            'Estado' => 'disponible',
            'Precio_Alquiler' => 120.00,
            'Concesionario' => 'Carlos Sánchez',
            'Contacto' => '555-9876',
            'Productos' => 'Lácteos y Panadería',
            'Fecha_Ingreso' => '2024-07-15',
            'Fecha_Salida' => null
        ]);

        Puesto::create([
            'Ubicacion' => 'Zona B2',
            'Estado' => 'en mantenimiento',
            'Precio_Alquiler' => 120.00,
            'Concesionario' => 'Carlos Sánchez',
            'Contacto' => '555-9876',
            'Productos' => 'Lácteos y Panadería',
            'Fecha_Ingreso' => '2024-07-15',
            'Fecha_Salida' => null
        ]);

        Puesto::create([
            'Ubicacion' => 'Zona C1',
            'Estado' => 'ocupado',
            'Precio_Alquiler' => 120.00,
            'Concesionario' => 'Carlos Sánchez',
            'Contacto' => '555-9876',
            'Productos' => 'Lácteos y Panadería',
            'Fecha_Ingreso' => '2024-07-15',
            'Fecha_Salida' => null
        ]);
    }
}
