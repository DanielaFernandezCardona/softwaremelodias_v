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
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->increments('idDetalleVenta');
            $table->integer('cantidadProductos');
            $table->double('costoTotalVenta');
            $table->date('fechaVenta');
            $table->timestamps();

            //Foranea para el codigo de producto vendido
            $table->integer('producto_codigoProducto')->unsigned();
            $table->foreign('producto_codigoProducto')
                    ->references('codigoProducto')->on('productos')
                    ->onDelete('cascade');

            //Foranea para el codigo de la venta.
            $table->integer('venta_codigoVenta')->unsigned();
            $table->foreign('venta_codigoVenta')
                    ->references('codigoVenta')->on('ventas')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventas');
    }
}
