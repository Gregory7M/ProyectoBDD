<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('ID_Producto');
            $table->string('Nombre', 100);
            $table->string('Categoría', 50);
            $table->decimal('Precio', 10, 2);
            $table->integer('Stock');
            $table->date('Fecha_Entrada');
            $table->date('Fecha_Caducidad');
            $table->foreignId('ID_Comerciante')->constrained('comerciantes', 'ID_Comerciante');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};