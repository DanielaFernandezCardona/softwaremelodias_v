<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detalleventas', function (Blueprint $table) {
            $table->increments('idDetalleVenta');
            $table->string('cantidad')->nullable();
            $table->string('costoTotalVenta')->nullable();
            $table->string('producto_codigoProducto')->nullable();
            $table->string('venta_codigoVenta')->nullable();
            $table->string('fechaVenta')->nullable();

             $table->foreign('producto_codigoProducto')
                    ->references('codigoProducto')->on('productos')
                    ->onDelete('cascade');

            $table->foreign('venta_codigoVentas')
                    ->references('codigoVenta')->on('ventas')
                    ->onDelete('cascade');

           
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
        Schema::dropIfExists('Detalle_Ventas');
    }
}
