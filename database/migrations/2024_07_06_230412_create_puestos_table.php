<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestosTable extends Migration
{
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->id('ID_Puesto');
            $table->string('Ubicación', 100);
            $table->string('Estado', 20);
            $table->string('Tamaño', 50);
            $table->decimal('Precio_Alquiler', 10, 2);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('puestos');
    }
};