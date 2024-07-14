<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venta;

class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venta::create([
            'Fecha' => '2024-06-01', 
            'ID_Producto' => 1, 
            'Cantidad' => 10, 
            'Monto_Total' => 25.00, 
            'ID_Comerciante' => 1
        ]);

        Venta::create([
            'Fecha' => '2024-06-02', 
            'ID_Producto' => 2, 
            'Cantidad' => 15, 
            'Monto_Total' => 22.50, 
            'ID_Comerciante' => 2
        ]);

        Venta::create([
            'Fecha' => '2024-06-03', 
            'ID_Producto' => 3, 
            'Cantidad' => 5, 
            'Monto_Total' => 40.00, 
            'ID_Comerciante' => 3
        ]);

        Venta::create([
            'Fecha' => '2024-06-04', 
            'ID_Producto' => 4, 
            'Cantidad' => 3, 
            'Monto_Total' => 30.00, 
            'ID_Comerciante' => 4
        ]);

        Venta::create([
            'Fecha' => '2024-06-05', 
            'ID_Producto' => 5, 
            'Cantidad' => 8, 
            'Monto_Total' => 40.00, 
            'ID_Comerciante' => 5
        ]);
    }
}
