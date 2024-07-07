<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminisTable extends Migration
{
    public function up()
    {
        Schema::create('adminis', function (Blueprint $table) {
            $table->id('ID_Admin');
            $table->string('nombre', 100);
            $table->string('apellido', 20);
            $table->string('correo', 50);
            $table->string('contraseña', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adminis');
    }
};