<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrendamientosTable extends Migration
{
    public function up()
    {
        Schema::create('arrendamientos', function (Blueprint $table) {
            $table->id('ID_Arrendamiento');
            $table->foreignId('ID_Puesto')->constrained('puestos', 'ID_Puesto')->onDelete('cascade');
            $table->foreignId('ID_Comerciante')->constrained('comerciantes', 'ID_Comerciante')->onDelete('cascade');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->decimal('Monto', 10, 2);
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('arrendamientos');
    }
};