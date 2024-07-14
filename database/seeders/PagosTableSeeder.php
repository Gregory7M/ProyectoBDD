<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pago;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pago::create([
            'ID_Arrendamiento' => 1, 
            'Fecha' => '2024-06-01', 
            'Monto' => 150.00, 
            'Método_Pago' => 'Tarjeta de Crédito'
        ]);

        Pago::create([
            'ID_Arrendamiento' => 2, 
            'Fecha' => '2024-06-05', 
            'Monto' => 80.00, 
            'Método_Pago' => 'Efectivo'
        ]);

        Pago::create([
            'ID_Arrendamiento' => 3, 
            'Fecha' => '2024-06-10', 
            'Monto' => 100.00, 
            'Método_Pago' => 'Transferencia Bancaria'
        ]);

        Pago::create([
            'ID_Arrendamiento' => 4, 
            'Fecha' => '2024-06-15', 
            'Monto' => 120.00, 
            'Método_Pago' => 'Tarjeta de Débito'
        ]);

        Pago::create([
            'ID_Arrendamiento' => 5, 
            'Fecha' => '2024-06-20', 
            'Monto' => 200.00, 
            'Método_Pago' => 'PayPal'
        ]);
    }
}
