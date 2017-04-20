<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoSimulacro extends Model
{
    protected $table = 'resultado_simulacro';
    protected $fillable = ['periodo', 'codigo', 'paterno','materno','nombres','sede','puntaje','nota','merito','merito_sede','asistio','observacion'];
}
