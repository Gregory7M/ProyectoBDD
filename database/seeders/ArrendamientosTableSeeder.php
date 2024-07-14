<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arrendamiento;

class ArrendamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arrendamiento::create([
            'ID_Puesto' => 2,
            'ID_Comerciante' => 1,
            'Fecha_Inicio' => '2024-01-01',
            'Fecha_Fin' => '2024-06-30',
            'Monto' => 900.00
        ]);

        Arrendamiento::create([
            'ID_Puesto' => 5, 
            'ID_Comerciante' => 2, 
            'Fecha_Inicio' => '2024-02-01', 
            'Fecha_Fin' => '2024-07-31', 
            'Monto' => 480.00
        ]);

        Arrendamiento::create([
            'ID_Puesto' => 1, 
            'ID_Comerciante' => 3, 
            'Fecha_Inicio' => '2024-03-01', 
            'Fecha_Fin' => '2024-08-31', 
            'Monto' => 600.00
        ]);

        Arrendamiento::create([
            'ID_Puesto' => 3, 
            'ID_Comerciante' => 4, 
            'Fecha_Inicio' => '2024-04-01', 
            'Fecha_Fin' => '2024-09-30', 
            'Monto' => 720.00
        ]);

        Arrendamiento::create([
            'ID_Puesto' => 4, 
            'ID_Comerciante' => 5, 
            'Fecha_Inicio' => '2024-05-01', 
            'Fecha_Fin' => '2024-10-31', '
            Monto' => 1000.00
        ]);
    }
}
