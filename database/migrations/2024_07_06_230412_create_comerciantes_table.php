<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComerciantesTable extends Migration
{
    public function up()
    {
        Schema::create('comerciantes', function (Blueprint $table) {
            $table->id('ID_Comerciante');
            $table->string('Nombre', 100);
            $table->text('Datos_Contacto');
            $table->string('Tipo_Productos', 100);
            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('comerciantes');
    }
};