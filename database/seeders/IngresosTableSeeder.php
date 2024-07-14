<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingreso;

class IngresosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingreso::create([
            'Fecha' => '2024-06-01', 
            'Descripción' => 'Venta de productos', 
            'Monto' => 500.00, 
            'Fuente' => 'ventas'
        ]);

        Ingreso::create([
            'Fecha' => '2024-06-05', 
            'Descripción' => 'Pago de arrendamiento', 
            'Monto' => 150.00, 
            'Fuente' => 'arrendamientos'
        ]);
        
        Ingreso::create([
            'Fecha' => '2024-06-10', 
            'Descripción' => 'Venta de productos', 
            'Monto' => 400.00, 
            'Fuente' => 'ventas'
        ]);

        Ingreso::create([
            'Fecha' => '2024-06-15',
            'Descripción' => 'Pago de arrendamiento', 
            'Monto' => 100.00, 
            'Fuente' => 'arrendamientos'
        ]);

        Ingreso::create([
            'Fecha' => '2024-06-20', 
            'Descripción' => 'Venta de productos', 
            'Monto' => 600.00, 
            'Fuente' => 'ventas'
        ]);
    }
}
