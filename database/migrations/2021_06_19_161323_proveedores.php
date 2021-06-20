<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pagos')->nullable();

            $table->string('nombre',10);
            $table->string('direccion',50);
            $table->string('ciudad',50);
            $table->string('codigo_postal',50);
            $table->string('telefono',50);
            $table->string('email')->unique();
            $table->string('metodos_de_pagos',50);
            $table->string('tipo_descuento',50);
            $table->string('notas',50);
            $table->decimal('descuento_disponible',8,2);
            $table->string('pais',50);
            $table->timestamps();

            //para las relaciones
            $table->foreign('id_pagos')->references('id')->on('pagos')->onDelete('set null');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
