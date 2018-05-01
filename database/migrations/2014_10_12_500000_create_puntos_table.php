<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {   
            $table->increments('idpuntos');
            $table->integer('clientes_cedula')->unsigned();
            $table->integer('mesas_codigoMesa')->unsigned();
            $table->double('puntos')->nullable();
            $table->string('rango')->nullable();
            $table->string('descripcion')->nullable();

            $table->foreign('clientes_cedula')
                    ->references('cedula')->on('clientes')                    
                    ->onDelete('cascade');

            $table->foreign('mesas_codigoMesa')
                    ->references('codigoMesa')->on('mesas')
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
        Schema::dropIfExists('puntos');
    }
}
