<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoAdmision extends Model
{
    protected $table = 'resultado_admision';
    protected $fillable = ['periodo', 'codigo', 'paterno','materno','nombres','puntaje1','puntaje2','puntaje3','puntaje_arq','nota1','nota2','nota3','nota_arq','merito1','merito2','merito3','merito_arq','asistio1','asistio2','asistio3','asistio_arq','modalidad','modalidad_ingreso','puntaje_acumulado','nota_final','nota_ingreso','nota_examen','merito_modalidad','merito_Especialidad','observacion'];
}
