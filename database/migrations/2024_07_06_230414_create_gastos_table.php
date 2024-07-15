<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosTable extends Migration
{
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->id('ID_Gasto');
            $table->date('Fecha');
            $table->text('Descripción');
            $table->decimal('Monto', 10, 2);
            $table->string('Tipo', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('gastos');
    }
};