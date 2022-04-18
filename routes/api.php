<?php

use App\Http\Controllers\API\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pacientes', [PacienteController::class, 'index']);
Route::post('crear-paciente', [PacienteController::class,'store']);
Route::get('paciente/{paciente}', [PacienteController::class,'show']);
Route::put('paciente/{paciente}', [PacienteController::class,'update']);
Route::delete('paciente/{paciente}', [PacienteController::class,'destroy']);