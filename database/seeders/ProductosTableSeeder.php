<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'Nombre' => 'Manzanas', 
            'Categoría' => 'Frutas', 
            'Precio' => 2.50, 
            'Stock' => 100, 
            'Fecha_Entrada' => '2024-06-01', 
            'Fecha_Caducidad' => '2024-07-01', 
            'ID_Comerciante' => 1
        ]);

        Producto::create([
            'Nombre' => 'Lechugas', 
            'Categoría' => 'Verduras', 
            'Precio' => 1.50, 
            'Stock' => 200, 
            'Fecha_Entrada' => '2024-06-05', 
            'Fecha_Caducidad' => '2024-07-15', 
            'ID_Comerciante' => 2
        ]);
        
        Producto::create([
            'Nombre' => 'Carne de Res', 
            'Categoría' => 'Carnes', 
            'Precio' => 8.00, 
            'Stock' => 50, 
            'Fecha_Entrada' => '2024-06-10', 
            'Fecha_Caducidad' => '2024-06-25', 
            'ID_Comerciante' => 3
        ]);

        Producto::create([
            'Nombre' => 'Pescado', 
            'Categoría' => 'Pescado', 
            'Precio' => 10.00, 
            'Stock' => 30, 
            'Fecha_Entrada' => '2024-06-12',
            'Fecha_Caducidad' => '2024-06-20', 
            'ID_Comerciante' => 4
        ]);

        Producto::create([
            'Nombre' => 'Queso', 
            'Categoría' => 'Lácteos', 
            'Precio' => 5.00, 
            'Stock' => 75, 
            'Fecha_Entrada' => '2024-06-15', 
            'Fecha_Caducidad' => '2024-07-15', 
            'ID_Comerciante' => 5
        ]);
    }
}
