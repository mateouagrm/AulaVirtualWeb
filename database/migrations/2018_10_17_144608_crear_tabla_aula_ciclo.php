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

            $table->integer('idaula')->unsigned();
            $table->integer('idciclo')->unsigned();

            $table->foreign('idaula')->references('id')->on('aula_virtual')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idciclo')->references('id')->on('ciclo')->onDelete('cascade')->onUpdate('cascade');

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
