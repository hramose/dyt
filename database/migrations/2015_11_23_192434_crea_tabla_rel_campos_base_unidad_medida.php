<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaRelCamposBaseUnidadMedida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos_base_unidad_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campo_base_id')->unsigned()->index();
            $table->integer('unidad_medida_id')->unsigned()->index();
            $table->foreign('campo_base_id')->references('id')->on('campos_base');
            $table->foreign('unidad_medida_id')->references('id')->on('unidad_medidas');
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
        Schema::drop('campos_base_unidad_medidas');
    }
}
