<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientoTable extends Migration
{
    public function up()
    {
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id('ID_Mantenimiento');
            $table->date('Fecha');
            $table->text('Descripción');
            $table->string('Estado', 20);
            $table->foreignId('ID_Puesto')->constrained('puestos', 'ID_Puesto');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mantenimiento');
    }
};