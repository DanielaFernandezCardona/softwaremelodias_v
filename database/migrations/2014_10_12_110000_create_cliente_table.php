<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
             $table->increments('cedula');
            //$table->integer('cedula')->primary();
            $table->string('nombreCompleto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('rol')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('clientes');
    }
}
