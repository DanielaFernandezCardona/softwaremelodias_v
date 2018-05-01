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
        Schema::create('participacion', function (Blueprint $table) {   
            $table->increments('idparticipacion');
              $table->integer('clientes_cedula')->unsigned();
              $table->integer('torneos_idtorneo')->unsigned();
              $table->integer('puestoLogrado')->nullable();
              $table->date('fechaInicio')->nullable();
              $table->date('fechaFin')->nullable();

             $table->foreign('clientes_cedula')
                    ->references('cedula')->on('clientes')                    
                    ->onDelete('cascade');

            $table->foreign('torneos_idtorneo')
                    ->references('idtorneo')->on('torneos')
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
        Schema::dropIfExists('participacion');
    }
}
