<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mantenimiento;

class MantenimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mantenimiento::create([
            'Fecha' => '2024-06-01', 
            'Descripción' => 
            'Reparación de luces', 
            'Estado' => 'completado', 
            'ID_Puesto' => 1
        ]);

        Mantenimiento::create([
            'Fecha' => '2024-06-05', 
            'Descripción' => 'Reparación de techo', 
            'Estado' => 'en progreso', 
            'ID_Puesto' => 2
        ]);

        Mantenimiento::create([
            'Fecha' => '2024-06-10', 
            'Descripción' => 'Pintura de paredes', 
            'Estado' => 'programado', 
            'ID_Puesto' => 3
        ]);

        Mantenimiento::create([
            'Fecha' => '2024-06-15', 
            'Descripción' => 'Reparación de puertas', 
            'Estado' => 'completado', 
            'ID_Puesto' => 4
        ]);

        Mantenimiento::create([
            'Fecha' => '2024-06-20', 
            'Descripción' => 'Mantenimiento de baños', 
            'Estado' => 'en progreso', 
            'ID_Puesto' => 5
        ]);
    }
}
