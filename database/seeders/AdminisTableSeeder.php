<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admini; // Import the Admini model

class AdminisTableSeeder extends Seeder
{
    public function run()
    {
        Admini::create([
            'nombre' => 'Gregory',
            'apellido' => 'Chevez',
            'correo' => 'kgchevez@espe.edu.ec',
            'contraseña' => 'kgchevez'
        ]);

        Admini::create([
            'nombre' => 'Juan',
            'apellido' => 'Yasig',
            'correo' => 'jcyasig@espe.edu.ec',
            'contraseña' => 'jcyasig'
        ]);

        Admini::create([
            'nombre' => 'Melany',
            'apellido' => 'Moreira',
            'correo' => 'mrmoreira@espe.edu.ec',
            'contraseña' => 'mrmoreira'
        ]);
    }
}