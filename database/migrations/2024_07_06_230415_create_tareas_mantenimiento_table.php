<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasMantenimientoTable extends Migration
{
    public function up()
    {
        Schema::create('tareas_mantenimiento', function (Blueprint $table) {
            $table->id('ID_Tarea');
            $table->text('Descripción');
            $table->date('Fecha_Programada');
            $table->date('Fecha_Realizacion')->nullable();
            $table->foreignId('ID_Mantenimiento')->constrained('mantenimiento', 'ID_Mantenimiento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tareas_mantenimiento');
    }
};