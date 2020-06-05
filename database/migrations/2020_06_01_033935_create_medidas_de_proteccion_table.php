<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasDeProteccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas_de_proteccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("carpeta");
            $table->string("causa_penal");
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->BigInteger('distrito_id')->unsigned();
            $table->foreign('distrito_id')->references('id')->on('distritos');
            $table->string("fiscal")->nullable($value = true);;
            $table->date("fecha");
            $table->time("hora");
            $table->string("solicitante");
            $table->boolean('aceptada')->default(0);
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
        Schema::dropIfExists('medida_de_proteccions');
    }
}
