<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->increments('codigoMesa');
            $table->integer('numeroMesa')->nullable();
            $table->string('tipoMesa')->nullable();
            $table->integer('valor5Minutos')->nullable();
            $table->date('tiempoInicio')->nullable();
            $table->integer('cantidadPersonas')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}