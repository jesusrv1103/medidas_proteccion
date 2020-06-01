<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGVulnerableMProteccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_vulnerable_m_proteccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('medida_de_proteccion_id')->unsigned();
            $table->foreign('medida_de_proteccion_id')->references('id')->on('medidas_de_proteccion');
            $table->BigInteger('grupo_vulnerable_id')->unsigned();
            $table->foreign('grupo_vulnerable_id')->references('id')->on('grupos_vulnerables');
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
        Schema::dropIfExists('g_vulnerable_m_proteccion');
    }
}
