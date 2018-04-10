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
            $table->increments()('codigoVenta');
            $table->string('estado')->nullable();
            $table->string('tiempoFinal')->nullable();

            $table->foreign('cliente_id')
                    ->references('cedula')->on('cliente')
                    ->onDelete('cascade');

            $table->foreign('mesa_id')
                    ->references('codigoMesa')->on('mesa')
                    ->onDelete('cascade');

            $table->rememberToken();
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
