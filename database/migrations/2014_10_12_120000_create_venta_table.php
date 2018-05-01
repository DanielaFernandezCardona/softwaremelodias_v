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
            $table->string('concepto')->nullable();
            $table->string('estado')->nullable();
            $table->double('tiempoFinal');
            $table->integer('mesa_codigoMesa')->unsigned();

            $table->foreign('mesa_codigoMesa')
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
        Schema::dropIfExists('ventas');
    }
}
