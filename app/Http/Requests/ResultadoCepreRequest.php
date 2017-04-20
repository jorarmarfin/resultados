<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ResultadoCepreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'codigo'=>'required|exists:resultado_cepre,codigo'
        ];
    }
    public function messages()
    {
        return[
            'codigo.exists'=>'El código ingresado no existe'
        ];
    }
}
