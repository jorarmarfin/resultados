<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoAdmisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_admision', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periodo',10)->nullable();
            $table->string('codigo',10)->nullable()->unique();
            $table->string('paterno',50)->nullable();
            $table->string('materno',50)->nullable();
            $table->string('nombres',100)->nullable();
            $table->decimal('puntaje1','10','3')->nullable();
            $table->decimal('puntaje2','10','3')->nullable();
            $table->decimal('puntaje3','10','3')->nullable();
            $table->decimal('puntaje_arq','10','3')->nullable();
            $table->decimal('nota1','10','3')->nullable();
            $table->decimal('nota2','10','3')->nullable();
            $table->decimal('nota3','10','3')->nullable();
            $table->decimal('nota_arq','10','3')->nullable();
            $table->integer('merito1')->nullable();
            $table->integer('merito2')->nullable();
            $table->integer('merito3')->nullable();
            $table->integer('merito_arq')->nullable();
            $table->boolean('asistio1')->nullable();
            $table->boolean('asistio2')->nullable();
            $table->boolean('asistio3')->nullable();
            $table->boolean('asistio_arq')->nullable();
            $table->string('modalidad',100)->nullable();
            $table->string('modalidad_ingreso',100)->nullable();
            $table->decimal('puntaje_acumulado','10','3')->nullable();
            $table->decimal('nota_final','10','3')->nullable();
            $table->decimal('nota_ingreso','10','3')->nullable();
            $table->decimal('nota_examen','10','3')->nullable();
            $table->integer('merito_modalidad')->nullable();
            $table->integer('merito_especialidad')->nullable();
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
        Schema::dropIfExists('resultado_admision');
    }
}
