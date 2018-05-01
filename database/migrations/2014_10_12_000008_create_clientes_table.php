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
            $table->primary('cedula');
            $table->string('tipoDocumento');
            $table->string('nombreCompleto');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('rol')->nullable();
            $table->timestamps();

            //Foranea para el usuario que le corresponde al cliente
            $table->integer('users_idUsuario')->unsigned();
            $table->foreign('users_idUsuario')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('clientes');
    }
}
