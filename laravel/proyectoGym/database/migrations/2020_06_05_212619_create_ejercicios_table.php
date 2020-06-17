<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');
            
            $table->string('nombre_ejercicio');
            $table->string('descripcion');
            $table->string('numero_series');
            $table->string('tiempo_ejercicio');

            $table->unsignedBigInteger('musculo_ejercicio');
            $table->foreign('musculo_ejercicio')->references('id')->on('musculos');


            $table->string('imagen');

            $table->unsignedBigInteger('maquina_ejercicio');
            $table->foreign('maquina_ejercicio')->references('id')->on('machines');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios');
    }
}
