<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAulaCiclo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_ciclo', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_aula')->unsigned();
            $table->integer('id_ciclo')->unsigned();

            $table->foreign('id_aula')->references('id')->on('aula_virtual')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('aula_ciclo');
    }
}
