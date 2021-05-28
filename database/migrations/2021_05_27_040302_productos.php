<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_categorias')->unsigned();
            //para las relaciones
            $table->foreign('id_categorias')->references("id")->on("categorias");
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->integer('ranking');
            $table->string('foto');
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
        Schema::dropIfExists('productos');
    }
}
