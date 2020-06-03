<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoMedidasProteccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_medidas_proteccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio');
            $table->date('fecha');
            $table->string('nombre_mp_otorga');
            $table->string('nombre_agresor');
            $table->integer('duracion');
            $table->date('fecha_notificacion');
            $table->string('numero_oficio');
            $table->text('incidencias');
            $table->BigInteger('medida_de_proteccion_id')->unsigned();
            $table->foreign('medida_de_proteccion_id')->references('id')->on('medidas_de_proteccion');
            $table->BigInteger('audiencia_medida_id')->unsigned();
            $table->foreign('audiencia_medida_id')->references('id')->on('audiencia_medidas');
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
        Schema::dropIfExists('seguimiento_medidas_proteccion');
    }
}
