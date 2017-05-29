<?php

namespace App\Http\Controllers;

use App\EstadoResultados;
use App\Http\Requests\ResultadoCepreRequest;
use App\ResultadoCepre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
class ResultadosController extends Controller
{
    public function cepre($id=null)
    {
        Session::put('ID', $id);
        if(is_null($id))$resultado = EstadoResultados::first();
        else $resultado = new EstadoResultados(['activo'=>true]);

        return view('cepre',compact('resultado'));
    }
    public function storecepre(Request $request)
    {
        $data = $request->all();
        $data['codigo'] = strtoupper($data['codigo']);
        $validator = Validator::make($data, [
            'codigo' => 'required|exists:resultado_cepre,codigo',
        ],[
            'codigo.exists'=>'El codigo ingresado no existe'
        ]);

        if ($validator->fails()) {

            return back()->withErrors($validator)
                        ->withInput();
        }

        $id = Session::get('ID');
        if(is_null($id))$resultado = EstadoResultados::first();
        else $resultado = new EstadoResultados(['activo'=>true]);

        $Lista = ResultadoCepre::where('codigo',$data['codigo'])->paginate();
        return view('cepre',compact('Lista','resultado'));
    }
    public function admision()
    {
    	return view('admision');
    }
    public function storeadmision(Request $request)
    {
        $data = $request->all();
        $data['codigo'] = strtoupper($data['codigo']);
        $validator = Validator::make($data, [
            'codigo' => 'required|exists:resultado_cepre,codigo',
        ],[
            'codigo.exists'=>'El codigo ingresado no existe'
        ]);

        if ($validator->fails()) {

            return back()->withErrors($validator)
                        ->withInput();
        }


    	$Lista = ResultadoCepre::where('codigo',$data['codigo'])->paginate();
    	return view('cepre',compact('Lista'));
    }
}
