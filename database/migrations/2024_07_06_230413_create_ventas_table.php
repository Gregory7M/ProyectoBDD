<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('ID_Venta');
            $table->date('Fecha');
            $table->foreignId('ID_Producto')->constrained('productos', 'ID_Producto');
            $table->integer('Cantidad');
            $table->decimal('Monto_Total', 10, 2);
            $table->foreignId('ID_Comerciante')->constrained('comerciantes', 'ID_Comerciante');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};