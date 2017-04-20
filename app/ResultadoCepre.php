<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoCepre extends Model
{
    protected $table = 'resultado_cepre';
    protected $fillable = ['periodo', 'codigo', 'paterno','materno','nombres','puntaje1','puntaje2','puntaje3','puntaje_arq','nota1','nota2','nota3','nota_arq','merito1','merito2','merito3','merito_arq','asistio1','asistio2','asistio3','asistio_arq','especialidad_ingreso'];

    /**
    * Atributos Nombre Completo
    */
    public function getNombreCompletoAttribute()
    {
    	return $this->paterno.' '.$this->materno.' '.$this->nombres;
    }
    /**
    * Atributos Puntaje1
    */
    public function getVerPuntaje1Attribute()
    {
    	if($this->asistio1)return $this->puntaje1;
    	else return 'ausente';
    }
    /**
    * Atributos Puntaje1
    */
    public function getVerPuntaje2Attribute()
    {
    	if($this->asistio2)return $this->puntaje2;
    	else return 'ausente';
    }
    /**
    * Atributos Puntaje1
    */
    public function getVerPuntaje3Attribute()
    {
    	if($this->asistio3)return $this->puntaje3;
    	else return 'ausente';
    }
    /**
    * Atributos Puntaje arq
    */
    public function getVerPuntajeArqAttribute()
    {
    	if($this->asistio_arq)return $this->puntaje_arq;
    	else return 'ausente';
    }
    /**
    * Atributos Nota 1
    */
    public function getVerNota1Attribute()
    {
    	if($this->asistio1)return $this->nota1;
    	else return '';
    }
    /**
    * Atributos Nota 2
    */
    public function getVerNota2Attribute()
    {
    	if($this->asistio2)return $this->nota2;
    	else return '';
    }
    /**
    * Atributos Nota 3
    */
    public function getVerNota3Attribute()
    {
    	if($this->asistio3)return $this->nota3;
    	else return '';
    }
    /**
    * Atributos Nota _arq
    */
    public function getVerNotaArqAttribute()
    {
    	if($this->asistio_arq)return $this->nota_arq;
    	else return '';
    }
    /**
    * Atributos Merito 1
    */
    public function getVerMerito1Attribute()
    {
    	if($this->asistio1)return $this->merito1;
    	else return '';
    }
    /**
    * Atributos Merito 2
    */
    public function getVerMerito2Attribute()
    {
    	if($this->asistio2)return $this->merito2;
    	else return '';
    }
    /**
    * Atributos Merito 3
    */
    public function getVerMerito3Attribute()
    {
    	if($this->asistio3)return $this->merito3;
    	else return '';
    }
    /**
    * Atributos Merito _arq
    */
    public function getVerMeritoArqAttribute()
    {
    	if($this->asistio_arq)return $this->merito_arq;
    	else return '';
    }
    /**
    * Atributos Ingreso
    */
    public function getIngresoAttribute()
    {
    	if($this->especialidad_ingreso)
    		return '<div class="row">
					    <div class="col-md-12">
					        <div class="alert alert-success">!!Felicidades usted a ingresado a '.$this->especialidad_ingreso.'¡¡</div>
					    </div><!--span-->
					</div><!--row-->';
    	else '';
    }
}
