<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('IdVehiculo');
            $table->string('Placa', 100);
            $table->date('Compra');
            $table->string('Color', 100);
            $table->integer('NumAsientos');
            $table->double('Kilometraje', 8, 2);
            $table->date('FVencimientoSeguro');
            $table->boolean('estado');

            $table->unsignedBigInteger('IdMarca');
            $table->unsignedBigInteger('IdModelo');
            $table->unsignedBigInteger('IdTipo');

            $table->foreign('IdMarca')->references('IdMarca')->on('marcas');
            $table->foreign('IdModelo')->references('IdModelo')->on('modelos');
            $table->foreign('IdTipo')->references('IdTipo')->on('tipos');
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
        Schema::dropIfExists('vehiculos');
    }
}
