<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoSimulacro extends Model
{
    protected $table = 'resultado_simulacro';
    protected $guarded = [];
    /**
    * Atributos Nombre Completo
    */
    public function getNombreCompletoAttribute()
    {
    	return $this->paterno.' '.$this->materno.' '.$this->nombres;
    }
    /**
    * Atributos Materia 1
    */
    public function getVerMateria1Attribute()
    {
    	if($this->asistio)return $this->materia_1;
    	else return 'Ausente';
    }
    /**
    * Atributos Puntaje
    */
    public function getVerNivel1Attribute()
    {
    	if($this->asistio)return $this->nivel_1;
    	else return 'Ausente';
    }
    /**
    * Atributos Materia 1
    */
    public function getVerMateria2Attribute()
    {
    	if($this->asistio)return $this->materia_2;
    	else return 'Ausente';
    }
    /**
    * Atributos Puntaje
    */
    public function getVerNivel2Attribute()
    {
    	if($this->asistio)return $this->nivel_2;
    	else return 'Ausente';
    }
    /**
    * Atributos Materia 1
    */
    public function getVerMateria3Attribute()
    {
    	if($this->asistio)return $this->materia_3;
    	else return 'Ausente';
    }
    /**
    * Atributos Puntaje
    */
    public function getVerNivel3Attribute()
    {
    	if($this->asistio)return $this->nivel_3;
    	else return 'Ausente';
    }
    /**
    * Atributos Puntaje
    */
    public function getVerPuntajeAttribute()
    {
    	if($this->asistio)return $this->puntaje;
    	else return 'Ausente';
    }
    /**
    * Atributos Nota
    */
    public function getVerNotaAttribute()
    {
    	if($this->asistio)return $this->nota;
    	else return '';
    }
    /**
    * Atributos Merito
    */
    public function getVerMeritoAttribute()
    {
    	if($this->asistio)return $this->merito;
    	else return '';
    }
}
