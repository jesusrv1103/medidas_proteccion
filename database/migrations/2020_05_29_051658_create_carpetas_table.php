<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carpeta')->nullable($value = true);
            $table->string('causaPenal')->nullable($value = true);
            $table->BigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->BigInteger('distrito_id')->unsigned();
            $table->foreign('distrito_id')->references('id')->on('distritos');
            $table->string('solicitante');
            $table->string('fiscal');
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
        Schema::dropIfExists('carpetas');
    }
}
