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
            $table->string("fiscal");
            $table->date("fecha");
            $table->time("hora");
            $table->string("solicitante");
            $table->BigInteger('testigo_id')->unsigned();
            $table->foreign('testigo_id')->references('id')->on('testigos');
            $table->BigInteger('persona_confianza_id')->unsigned();
            $table->foreign('persona_confianza_id')->references('id')->on('personas_de_confianza');
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
