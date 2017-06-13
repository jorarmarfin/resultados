<?php

namespace App\Http\Controllers;

use App\EstadoResultados;
use App\Http\Requests\ResultadoCepreRequest;
use App\ResultadoCepre;
use App\ResultadoSimulacro;
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
    public function simulacro($id=null)
    {
        Session::put('ID', $id);
        if(is_null($id))$resultado = EstadoResultados::first();
        else $resultado = new EstadoResultados(['activo'=>true]);

        return view('simulacro',compact('resultado'));
    }
    public function storesimulacro(Request $request)
    {
        $data = $request->all();
        $data['codigo'] = strtoupper($data['codigo']);
        $validator = Validator::make($data, [
            'codigo' => 'required|exists:resultado_simulacro,codigo',
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

        $Lista = ResultadoSimulacro::where('codigo',$data['codigo'])->first();
        return view('simulacro',compact('Lista','resultado'));
    }
    public function simulacroquinto()
    {
        $id = Session::get('ID');
        if(is_null($id))$resultado = EstadoResultados::first();
        else $resultado = new EstadoResultados(['activo'=>true]);

        $Lista = ResultadoSimulacro::where('grado','Quinto Año')->paginate();
        return view('simulacro-lista',compact('Lista','resultado'));
    }
    public function simulacrootros()
    {
        $id = Session::get('ID');
        if(is_null($id))$resultado = EstadoResultados::first();
        else $resultado = new EstadoResultados(['activo'=>true]);

        $Lista = ResultadoSimulacro::whereIn('grado',['Quinto Año','Otro'])->paginate();
        return view('simulacro-lista',compact('Lista','resultado'));
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
