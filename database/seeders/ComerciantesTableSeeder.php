<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comerciante;

class ComerciantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Comerciante::create([
            'Nombre' => 'Comerciante A',
            'Datos_Contacto' => '1234567890',
            'Tipo_Productos' => 'Frutas'
        ]);

        Comerciante::create([
            'Nombre' => 'Comerciante B',
            'Datos_Contacto' => '2345678901',
            'Tipo_Productos' => 'Verduras'
        ]);

        Comerciante::create([
            'Nombre' => 'Comerciante C',
            'Datos_Contacto' => '3456789012',
            'Tipo_Productos' => 'Carnes'
        ]);

        Comerciante::create([
            'Nombre' => 'Comerciante D',
            'Datos_Contacto' => '4567890123',
            'Tipo_Productos' => 'Pescado'
        ]);

        Comerciante::create([
            'Nombre' => 'Comerciante E',
            'Datos_Contacto' => '5678901234',
            'Tipo_Productos' => 'Lácteos'
        ]);

    }
}
