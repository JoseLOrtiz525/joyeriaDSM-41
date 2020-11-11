<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_venta');
            $table->string('cantidad',45);
            $table->string('subtotal',45);

            $table->unsignedBigInteger('ventas_id');
            $table->foreign('ventas_id')->references('id_venta')->on('venta');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id_producto')->on('producto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detalle_ventas');
    }
}
