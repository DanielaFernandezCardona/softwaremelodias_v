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
            $table->increments('idtorneo');
            $table->integer('premios_idpremio')->unsigned();
            $table->integer('cantidadJugadores')->nullable();
            $table->dateTime('fechaInicio')->nullable();
            $table->dateTime('fechaFin');
            $table->string('descripcion')->nullable();
            

             $table->foreign('premios_idpremio')
                    ->references('idpremio')->on('premios')                    
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
        Schema::dropIfExists('torneos');
    }
}
