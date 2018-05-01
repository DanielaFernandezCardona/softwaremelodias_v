<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('idReservas');
            $table->date('fechaReserva');
            $table->timestamps();

            //Foranea para la mesa que se quiere reservar
            $table->integer('mesas_codigoMesa')->unsigned();
            $table->foreign('mesas_codigoMesa')
                    ->references('codigoMesa')->on('mesas')
                    ->onDelete('cascade');

             //Foranea para el cliente que hace la reserva
             $table->integer('clientes_cedula')->unsigned();
             $table->foreign('clientes_cedula')
                    ->references('cedula')->on('clientes')
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
        Schema::dropIfExists('reservas');
    }
}
