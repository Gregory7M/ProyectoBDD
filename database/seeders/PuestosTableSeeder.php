<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puesto;

class PuestosTableSeeder extends Seeder
{
    public function run()
    {
        Puesto::create([
            'Ubicación' => 'Zona A1', 
            'Estado' => 'disponible', 
            'Tamaño' => '10x10', 
            'Precio_Alquiler' => 100.00
        ]);
        Puesto::create([
            'Ubicación' => 'Zona A2', 
            'Estado' => 'disponible', 
            'Tamaño' => '10x15', 
            'Precio_Alquiler' => 150.00
        ]);
        Puesto::create([
            'Ubicación' => 'Zona B1', 
            'Estado' => 'en mantenimiento', 
            'Tamaño' => '12x12', 
            'Precio_Alquiler' => 120.00
        ]);
        Puesto::create([
            'Ubicación' => 'Zona B2', 
            'Estado' => 'disponible', 
            'Tamaño' => '15x15', 
            'Precio_Alquiler' => 200.00
        ]);
        Puesto::create([
            'Ubicación' => 'Zona C1', 
            'Estado' => 'ocupado', 
            'Tamaño' => '8x8', 
            'Precio_Alquiler' => 80.00
        ]);
    }
    // Hola mundo
}
