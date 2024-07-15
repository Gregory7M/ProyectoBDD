<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('ID_Inventario');
            $table->foreignId('ID_Producto')->constrained('productos', 'ID_Producto');
            $table->integer('Cantidad');
            $table->date('Fecha_Registro');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};