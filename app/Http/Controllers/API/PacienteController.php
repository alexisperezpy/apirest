<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Requests\GuardarPacientesRequest;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;

class PacienteController extends Controller
{        
    public function index()
    {
        //return Paciente::all();
        return Paciente::select('id',
            'nombres',
            'apellidos',
            'edad',
            'sexo',
            'cedula',
            'tipo_sangre',
            'telefono',
            'correo',
            'direccion')->where('deleted_at', NULL)->get();
    }

    
    public function store(GuardarPacientesRequest $request)
    {
        Paciente::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Paciente registrado correctamente'
        ],200);
    }

    
    public function show(Paciente $paciente)
    {
        return response()->json([
            'res' => true,
            'paciente' => $paciente
        ],200);
    }

    
    public function update( ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Datos del Paciente actualizado correctamente'
        ],200);
    }

    
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Paciente eliminado correctamente'
        ], 200);
    }
}
