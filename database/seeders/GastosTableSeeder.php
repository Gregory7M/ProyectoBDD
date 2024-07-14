<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gasto::create([
            'Fecha' => '2024-06-01', 
            'Descripción' => 'Reparación de luces', 
            'Monto' => 50.00, 
            'Tipo' => 'mantenimiento'
        ]);

        Gasto::create([
            'Fecha' => '2024-06-05', 
            'Descripción' => 'Limpieza general', 
            'Monto' => 30.00, 
            'Tipo' => 'operativo'
        ]);

        Gasto::create([
            'Fecha' => '2024-06-10', 
            'Descripción' => 'Publicidad', 
            'Monto' => 100.00, 
            'Tipo' => 'operativo'
        ]);

        Gasto::create([
            'Fecha' => '2024-06-15', 
            'Descripción' => 'Reparación de techo', 
            'Monto' => 200.00, 
            'Tipo' => 'mantenimiento'
        ]);

        Gasto::create([
            'Fecha' => '2024-06-20', 
            'Descripción' => 'Seguridad adicional', 
            'Monto' => 150.00, 
            'Tipo' => 'operativo'
        ]);
    }
}
