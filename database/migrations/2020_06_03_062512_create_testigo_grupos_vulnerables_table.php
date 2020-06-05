<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestigoGruposVulnerablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testigo_grupos_vulnerables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('testigo_id')->unsigned();
            $table->foreign('testigo_id')->references('id')->on('testigos');
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
        Schema::dropIfExists('testigo_grupos_vulnerables');
    }
}
