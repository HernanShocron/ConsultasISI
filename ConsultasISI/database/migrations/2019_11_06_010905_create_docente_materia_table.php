<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_materia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('docente_id')->unsigned();
            $table->bigInteger('materia_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')
                ->onDelete('cascade');
            $table->string('dia_semana');
            $table->string('lugar');
            $table->time('horario');
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
        Schema::dropIfExists('docente_materia');
    }
}
