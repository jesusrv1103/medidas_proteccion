<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testigos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->tinyInteger('edad');
            $table->BigInteger('nacionalidad_id')->unsigned();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->BigInteger('ocupacion_id')->unsigned();
            $table->foreign('ocupacion_id')->references('id')->on('ocupaciones');
            $table->string('correo')->nullable($value = true);
            $table->string('domicilio');
            $table->BigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('testigos');
    }
}
