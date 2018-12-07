<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombre')->nullable();
             $table->integer('id_aula')->unsigned();
             $table->integer('id_requisito')->unsigned();
             $table->string('enlace')->nullable();
             $table->string('fecha')->nullable();


            $table->foreign('id_aula')->references('id')->on('aula_virtual')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_requisito')->references('id')->on('requisito')->onDelete('cascade')->onUpdate('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivo');
    }
}
