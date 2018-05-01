<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {
            $table->increments('idPuntos');
            $table->double('puntos');
            $table->string('rango');
            $table->string('descripcion')->nullable();
            $table->timestamps();

            //Foranea del cliente que posee puntos
            $table->integer('clientes_cedula')->unsigned();
            $table->foreign('clientes_cedula')
                    ->references('cedula')->on('clientes')
                    ->onDelete('cascade');

            //Foranea para la mesa en la cual se ganaron los puntos
            $table->integer('mesas_codigoMesa')->unsigned();
            $table->foreign('mesas_codigoMesa')
                    ->references('codigoMesa')->on('mesas')
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
        Schema::dropIfExists('puntos');
    }
}
