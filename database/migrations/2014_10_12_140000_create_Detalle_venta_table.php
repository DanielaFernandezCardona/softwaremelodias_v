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
        Schema::create('Detalle_Ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';    
            $table->increments('idDetalleVenta');
            $table->string('cantidad')->nullable();
            $table->string('costoTotalVenta')->nullable();
            $table->string('fechaVenta')->nullable();
            $table->integer('producto_id')->unsigned();
            $table->integer('venta_id')->unsigned();

             $table->foreign('producto_id')
                    ->references('codigoProducto')->on('productos')                    
                    ->onDelete('cascade');

            $table->foreign('venta_id')
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
