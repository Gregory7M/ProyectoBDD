<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionesTable extends Migration
{
    public function up()
    {
        Schema::create('inspecciones', function (Blueprint $table) {
            $table->id('ID_Inspeccion');
            $table->date('Fecha');
            $table->foreignId('ID_Puesto')->constrained('puestos', 'ID_Puesto');
            $table->string('Resultado', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('inspecciones');
    }
};