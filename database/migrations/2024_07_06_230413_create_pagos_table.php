<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('ID_Pago');
            $table->foreignId('ID_Arrendamiento')->constrained('arrendamientos', 'ID_Arrendamiento');
            $table->date('Fecha');
            $table->decimal('Monto', 10, 2);
            $table->string('Método_Pago', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};