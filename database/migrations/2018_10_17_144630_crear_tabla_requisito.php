<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRequisito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('puntaje')->nullable();
            $table->integer('id_ciclo')->unsigned();
            $table->foreign('id_ciclo')->references('id')->on('ciclo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisito');
    }
}
