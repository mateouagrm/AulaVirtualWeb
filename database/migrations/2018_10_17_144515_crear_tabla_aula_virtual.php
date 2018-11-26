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
            $table->integer('id_creador')->unsigned();
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_cronograma')->unsigned();
            $table->string('materia')->nullable();
            $table->string('carrera')->nullable();

            $table->foreign('id_creador')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_profesor')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_cronograma')->references('id')->on('cronograma')->onDelete('cascade')->onUpdate('cascade');

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
