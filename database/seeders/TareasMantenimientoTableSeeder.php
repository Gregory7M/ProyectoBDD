<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TareaMantenimiento;

class TareasMantenimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TareaMantenimiento::create([
            'Descripción' => 'Cambiar focos', 
            'Fecha_Programada' => '2024-06-01', 
            'Fecha_Realizacion' => '2024-06-02', 
            'ID_Mantenimiento' => 1
        ]);

        TareaMantenimiento::create([
            'Descripción' => 'Reparar goteras', 
            'Fecha_Programada' => '2024-06-05', 
            'Fecha_Realizacion' => NULL, 
            'ID_Mantenimiento' => 2
        ]);

        TareaMantenimiento::create([
            'Descripción' => 'Pintar muros', 
            'Fecha_Programada' => '2024-06-10', 
            'Fecha_Realizacion' => '2024-06-11', 
            'ID_Mantenimiento' => 3
        ]);

        TareaMantenimiento::create([
            'Descripción' => 'Arreglar cerraduras', 
            'Fecha_Programada' => '2024-06-15', 
            'Fecha_Realizacion' => '2024-06-16', 
            'ID_Mantenimiento' => 4
        ]);

        TareaMantenimiento::create([
            'Descripción' => 'Limpiar drenajes', 
            'Fecha_Programada' => '2024-06-20', 
            'Fecha_Realizacion' => NULL, 
            'ID_Mantenimiento' => 5
        ]);
    }
}
