<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci')->nullable();
            $table->integer('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->integer('celular')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();

            $table->integer('id_cargo')->unsigned();
            $table->foreign('id_cargo')->references('id')->on('cargo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
