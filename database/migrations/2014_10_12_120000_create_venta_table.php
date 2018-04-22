<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('codigoVenta');
            $table->string('estado')->nullable();
            $table->string('tiempoFinal')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->integer('mesa_id')->unsigned();

            $table->index('cliente_id', 'fk_ventas_cliente_idx');
            $table->index('mesa_id', 'fk_mesa_cliente_idx');


            $table->foreign('mesa_id')
                    ->references('codigoMesa')->on('mesa')
                    ->onDelete('cascade');

             $table->foreign('cliente_id')
                    ->references('cedula')->on('clientes')
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
        Schema::dropIfExists('ventas');
    }
}
