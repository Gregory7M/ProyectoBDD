<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminisTableSeeder::class,
            PuestosTableSeeder::class,
            ComerciantesTableSeeder::class,
            ArrendamientosTableSeeder::class,
            ProductosTableSeeder::class,
            InventariosTableSeeder::class,
            VentasTableSeeder::class,
            PagosTableSeeder::class,
            GastosTableSeeder::class,
            IngresosTableSeeder::class,
            InspeccionesTableSeeder::class,
            MantenimientoTableSeeder::class,
            TareasMantenimientoTableSeeder::class,
        ]);
    }
}
