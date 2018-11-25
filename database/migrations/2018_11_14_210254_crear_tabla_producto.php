<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->integer('id_ciudad')->unsigned()->nullable();
            $table->integer('id_categoria')->unsigned()->nullable();
            $table->integer('id_subcategoria')->unsigned()->nullable();
            $table->string('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->double('precio')->nullable();
            $table->integer('bono')->nullable();
            $table->integer('descuento')->nullable();
            $table->date('fecha_descuento')->nullable();

            $table->foreign('id_ciudad')->references('id')->on('ciudad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_subcategoria')->references('id')->on('sub_categoria')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
