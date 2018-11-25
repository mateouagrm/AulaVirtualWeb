<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCiudadCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad_categoria', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_ciudad')->unsigned()->nullable();
            $table->integer('id_categoria')->unsigned()->nullable();

            $table->foreign('id_ciudad')->references('id')->on('ciudad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad_categoria');
    }
}
