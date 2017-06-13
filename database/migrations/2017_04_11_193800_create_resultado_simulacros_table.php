<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoSimulacrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_simulacro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periodo',10)->nullable();
            $table->string('codigo',10)->nullable()->unique();
            $table->string('paterno',50)->nullable();
            $table->string('materno',50)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('sede',100)->nullable();
            $table->string('especialidad',100)->nullable();
            $table->string('grado',100)->nullable();
            $table->decimal('puntaje','10','3')->nullable();
            $table->decimal('nota','10','3')->nullable();
            $table->integer('merito')->nullable();
            $table->integer('merito_sede')->nullable();
            $table->boolean('asistio')->nullable();
            $table->string('materia_1',50)->nullable();
            $table->string('nivel_1',50)->nullable();
            $table->string('materia_2',50)->nullable();
            $table->string('nivel_2',50)->nullable();
            $table->string('materia_3',50)->nullable();
            $table->string('nivel_3',50)->nullable();
            $table->mediumtext('observacion')->nullable();
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
        Schema::dropIfExists('resultado_simulacro');
    }
}
