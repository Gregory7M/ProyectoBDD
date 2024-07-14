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
            $table->string('Ubicacion', 100);
            $table->string('Estado', 20);
            $table->decimal('Precio_Alquiler', 10, 2);
            $table->string('Concesionario', 100);
            $table->string('Contacto', 100);
            $table->string('Productos', 255);
            $table->date('Fecha_Ingreso')->nullable();
            $table->date('Fecha_Salida')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('puestos');
    }
};