<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bono', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_recomendado')->unsigned()->nullable();
            $table->integer('id_cliente')->unsigned()->nullable();
            $table->money('monto')->nullable();
            $table->string('estado')->nullable();


            $table->foreign('id_recomendado')->references('id')->on('recomendado')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bono');
    }
}
