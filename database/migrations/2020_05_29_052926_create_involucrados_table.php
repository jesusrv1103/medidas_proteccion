<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucrados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('carpeta_id')->unsigned();
            $table->foreign('carpeta_id')->references('id')->on('carpetas');
            $table->string('nombre');
            $table->string('edad');
            $table->BigInteger('nacionalidad_id')->unsigned();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->BigInteger('ocupacion_id')->unsigned();
            $table->foreign('ocupacion_id')->references('id')->on('ocupaciones');
            $table->string('lugarResidencia');
            $table->string('telefono');
            $table->string('telefonoPersonaConfianza');
            $table->string('email')->nullable($value = true);
            $table->foreign('crimen_id')->references('id')->on('crimenes');
            $table->BigInteger('crimen_id')->unsigned();
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->BigInteger('servicio_id')->unsigned();
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
        Schema::dropIfExists('involucrados');
    }
}
