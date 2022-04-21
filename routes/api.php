<?php

use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\AutenticarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('registro',[AutenticarController::class,'registro']);
Route::post('acceso',[AutenticarController::class,'acceso']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('salir',[AutenticarController::class, 'cerrarSesion']);
    Route::apiResource('pacientes',PacienteController::class);
    //Route::get('pacientes', [PacienteController::class, 'index']);
    //Route::post('crear-paciente', [PacienteController::class,'store']);
    //Route::get('pacientes/{paciente}', [PacienteController::class,'show']);
    //Route::patch('pacientes/{paciente}', [PacienteController::class,'update']);
    //Route::delete('pacientes/{paciente}', [PacienteController::class,'destroy']);
});