<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAulaVirtual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_virtual', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcreador')->unsigned();
            $table->integer('idprofesor')->unsigned();
            $table->integer('idcronograma')->unsigned();
            $table->string('materia')->nullable();
            $table->string('carrera')->nullable();

            $table->foreign('idcreador')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idprofesor')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idcronograma')->references('id')->on('cronograma')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aula_virtual');
    }
}
