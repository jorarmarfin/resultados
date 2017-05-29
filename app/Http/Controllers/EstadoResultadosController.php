<?php

namespace App\Http\Controllers;

use App\EstadoResultados;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class EstadoResultadosController extends Controller
{
    public function activar($id)
    {

 		EstadoResultados::whereNotNull('id')->update(['activo'=>$id]);
 		$retVal = ($id) ? 'Activado' : 'Desactivado' ;

    	Alert::success('Resultado  '.$retVal.' con exito');
    	return redirect()->back();
    }
}
