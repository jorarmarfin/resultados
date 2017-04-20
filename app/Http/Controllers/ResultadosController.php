<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultadoCepreRequest;
use App\ResultadoCepre;
use Illuminate\Http\Request;
use Validator;
class ResultadosController extends Controller
{
    public function cepre()
    {
    	return view('cepre');
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


    	$Lista = ResultadoCepre::where('codigo',$data['codigo'])->paginate();
    	return view('cepre',compact('Lista'));
    }
}
