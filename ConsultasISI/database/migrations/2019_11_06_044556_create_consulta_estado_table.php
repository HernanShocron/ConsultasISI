<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta_estado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('estado_id')->unsigned();
            $table->bigInteger('consulta_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados')
                ->onDelete('cascade');
            $table->foreign('consulta_id')->references('id')->on('consultas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('consulta_estado');
    }
}
