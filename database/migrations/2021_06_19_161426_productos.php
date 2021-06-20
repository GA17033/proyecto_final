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
            $table->id();
            
            $table->unsignedBigInteger('id_categorias')->nullable();
            $table->unsignedBigInteger('id_proveedores')->nullable();

            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio',8,2);
            $table->integer('cantidad');
            $table->integer('ranking');
            $table->string('foto');
            $table->timestamps();

            //para las relaciones
            $table->foreign('id_categorias')->references('id')->on('categorias');
            $table->foreign('id_proveedores')->references('id')->on('proveedores');
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
