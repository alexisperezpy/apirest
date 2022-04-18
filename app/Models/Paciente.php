<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'sexo',
        'cedula',
        'tipo_sangre',
        'telefono',
        'correo',
        'direccion'
    ];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at'
    ];
}
