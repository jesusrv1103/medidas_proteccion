<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasProteccionDescripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas_proteccion_descripcion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('medida_de_proteccion_id')->unsigned();
            $table->foreign('medida_de_proteccion_id')->references('id')->on('medidas_de_proteccion');
            $table->text('descripcion')->nullable($value = true);
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
        Schema::dropIfExists('medidas_proteccion_descripcion');
    }
}
