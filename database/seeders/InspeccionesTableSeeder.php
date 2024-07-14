<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inspeccion;

class InspeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inspeccion::create([
            'Fecha' => '2024-06-01', 
            'ID_Puesto' => 1, 
            'Resultado' => 'satisfactorio'
        ]);

        Inspeccion::create([
            'Fecha' => '2024-06-05', 
            'ID_Puesto' => 2, 
            'Resultado' => 'necesita reparación'
        ]);

        Inspeccion::create([
            'Fecha' => '2024-06-10', 
            'ID_Puesto' => 3, 
            'Resultado' => 'satisfactorio'
        ]);

        Inspeccion::create([
            'Fecha' => '2024-06-15', 
            'ID_Puesto' => 4, 
            'Resultado' => 'necesita limpieza'
        ]);

        Inspeccion::create([
            'Fecha' => '2024-06-20', 
            'ID_Puesto' => 5, 
            'Resultado' => 'satisfactorio'
        ]);
    }
}
