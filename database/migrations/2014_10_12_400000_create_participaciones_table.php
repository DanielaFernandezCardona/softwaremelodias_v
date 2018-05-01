<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participaciones', function (Blueprint $table) {
            $table->increments('idParticipacion');
            $table->integer('puestoLogrado');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->timestamps();

            //Columna foranea para el cliente que participo
            $table->integer('clientes_cedulaCliente')->unsigned();
            $table->foreign('clientes_cedulaCliente')
                  ->references('cedula')->on('clientes')
                  ->onDelete('cascade');

            //Columna foranea para el torneo
            $table->integer('torneos_idTorneo')->unsigned();
            $table->foreign('torneos_idTorneo')
                  ->references('idTorneo')->on('torneos')
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
        Schema::dropIfExists('participaciones');
    }
}
