<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('sucursal_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('sucursales_productos', function (Blueprint $table) {
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->foreign('producto_id')->references('id')->on('productos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales_productos');
    }
}
