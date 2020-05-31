<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fracciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->BigInteger('ley_proteccion_id')->unsigned();
            $table->foreign('ley_proteccion_id')->references('id')->on('leyes_de_proteccion');
            $table->BigInteger('cat_ley_proteccion_id')->unsigned();
            $table->foreign('cat_ley_proteccion_id')->references('id')->on('leyes_de_proteccion');
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
        Schema::dropIfExists('fracciones');
    }
}
