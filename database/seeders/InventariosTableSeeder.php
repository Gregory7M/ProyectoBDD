<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventario;

class InventariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventario::create([
            'ID_Producto' => 1, 
            'Cantidad' => 100, 
            'Fecha_Registro' => '2024-06-01'
        ]);

        Inventario::create([
            'ID_Producto' => 2, 
            'Cantidad' => 200, 
            'Fecha_Registro' => '2024-06-05'
        ]);

        Inventario::create([
            'ID_Producto' => 3, 
            'Cantidad' => 50, 
            'Fecha_Registro' => '2024-06-10'
        ]);

        Inventario::create([
            'ID_Producto' => 4, 
            'Cantidad' => 30, 
            'Fecha_Registro' => '2024-06-12'
        ]);

        Inventario::create([
            'ID_Producto' => 5, 
            'Cantidad' => 75, 
            'Fecha_Registro' => '2024-06-15'
        ]);
    }
}
