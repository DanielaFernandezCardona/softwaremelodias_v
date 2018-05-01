<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->increments('idTorneo');
            $table->integer('cantidadJugadores');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('descripcion')->nullable();
            $table->timestamps();

            //Foranea del cliente que posee puntos
            $table->integer('premios_idPremio')->unsigned();
            $table->foreign('premios_idPremio')
                    ->references('idPremio')->on('premios')
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
        Schema::dropIfExists('torneos');
    }
}
