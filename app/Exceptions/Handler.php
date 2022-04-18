<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'res' =>__('Los datos proporcionados no son válidos.'),
            'errores' => $exception->errors(),
        ], $exception->status);
    }

    public function render($request, Throwable $exception){
        if($exception instanceof ModelNotFoundException){
            return response()->json([
                "res" => false,
                "error" => "Error! registro no encontrado" 
            ], 400);
        }
        return parent::render($request, $exception);
    }
}
