<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienciaMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiencia_medidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('resultado');
            $table->boolean('antecedente_medida');
            $table->boolean('antecedente_denuncia_medida');
            $table->BigInteger('seguimiento_id')->unsigned();
            $table->foreign('seguimiento_id')->references('id')->on('seguimiento_medidas_proteccion');
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
        Schema::dropIfExists('audiencia_medidas');
    }
}
