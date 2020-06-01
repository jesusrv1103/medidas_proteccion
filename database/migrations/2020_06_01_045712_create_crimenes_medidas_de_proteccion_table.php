<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrimenesMedidasDeProteccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimenes_medidas_de_proteccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('crimen_id')->unsigned();
            $table->foreign('crimen_id')->references('id')->on('crimenes');
            $table->BigInteger('medida_de_proteccion_id')->unsigned();
            $table->foreign('medida_de_proteccion_id')->references('id')->on('medidas_de_proteccion');
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
        Schema::dropIfExists('crimenes_medida_de_proteccions');
    }
}
