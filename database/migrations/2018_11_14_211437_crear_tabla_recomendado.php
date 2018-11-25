<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRecomendado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomendado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email')->nullable();
            $table->integer('id_cliente')->unsigned()->nullable();
            $table->integer('id_producto')->unsigned()->nullable();
            $table->date('fecha')->nullable();

            $table->foreign('id_cliente')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomendado');
    }
}
