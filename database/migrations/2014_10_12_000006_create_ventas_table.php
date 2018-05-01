<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('codigoVenta');
            $table->string('concepto');
            $table->string('estado');
            $table->double('tiempoFinal');
            $table->timestamps();

            //se crea la relacion de foranea para la mesa correspondiente
            $table->integer('mesa_codigoMesa')->nullable()->unsigned();
            $table->foreign('mesa_codigoMesa')
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
        Schema::dropIfExists('ventas');
    }
}
