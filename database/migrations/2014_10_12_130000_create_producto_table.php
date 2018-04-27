<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('codigoProducto');
            $table->string('nombreProducto')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('unidades')->nullable();
            $table->integer('precioCompra')->nullable();
            $table->integer('precioVenta')->nullable();
            $table->varchar('imagen')->nullable();
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
        Schema::dropIfExists('productos');
    }
}