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
        Schema::create('detalleventas', function (Blueprint $table) {   
            $table->increments('idDetalleVenta');
            $table->integer('cantidadProductos')->nullable();
            $table->integer('costoTotalVenta')->nullable();
            $table->date('fechaVenta')->nullable();
            $table->integer('producto_codigoProducto')->unsigned();
            $table->integer('venta_codigoVenta')->unsigned();

             $table->foreign('producto_codigoProducto')
                    ->references('codigoProducto')->on('productos')                    
                    ->onDelete('cascade');

            $table->foreign('venta_codigoVenta')
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
        Schema::dropIfExists('detalleventas');
    }
}
