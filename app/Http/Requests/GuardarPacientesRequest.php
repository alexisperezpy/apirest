<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacientesRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombres' => 'required|string|min:5|max:60',
            'apellidos'=> 'required|string|min:5|max:60',
            'edad'=> 'required|numeric|min:1|max:100',
            'sexo'=>'required|in:M,F,O',
            'cedula'=>'required|min:6|max:10|unique:pacientes,cedula',
            'tipo_sangre'=>'required|string',
        ];
    }
}
