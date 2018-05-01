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
            $table->increments('idparticipacion');
            $table->integer('puestoLogrado');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->timestamps();

            //foranea para la tabla cliente
            $table->integer('clientes_cedula')->unsigned();
            $table->foreign('clientes_cedula')
                    ->references('cedula')->on('clientes')
                    ->onDelete('cascade');

            //foranea para la tabla torneo
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
