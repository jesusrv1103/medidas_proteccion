<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraccionesSeguimientoMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fracciones_seguimiento_medidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('seguimiento_id')->unsigned();
            $table->foreign('seguimiento_id')->references('id')->on('seguimiento_medidas_proteccion');
            $table->BigInteger('fracciones_id')->unsigned();
            $table->foreign('fracciones_id')->references('id')->on('fracciones');
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
        Schema::dropIfExists('fracciones_seguimiento_medidas');
    }
}
