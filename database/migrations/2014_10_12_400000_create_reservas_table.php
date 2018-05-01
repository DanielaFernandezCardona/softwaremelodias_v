<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('idreservas');
              $table->integer('mesas_codigoMesa')->unsigned();
              $table->integer('clientes_cedula')->unsigned();
              $table->date('fechaReserva')->nullable();

            $table->foreign('mesas_codigoMesa')
                    ->references('codigoMesa')->on('mesas')
                    ->onDelete('cascade');

             $table->foreign('clientes_cedula')
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
        Schema::dropIfExists('reservas');
    }
}
