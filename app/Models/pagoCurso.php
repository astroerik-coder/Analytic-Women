<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoCurso extends Model
{

    protected $table = 'pagocursos';

    protected $primaryKey = 'id_pagocurso';

    protected $fillable = [
        'nombrePersona',
        'cursoPagado',
        'montoPagado',
        'metodoPago',
        'fechaPago',
        'estadoPago',
        'comentariosPago',
    ];
    use HasFactory;


}
