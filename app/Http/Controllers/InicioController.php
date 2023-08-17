<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Informacione;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    // Datos del inicio
    public function mostrarMisionVision()
    {
        $informacion = Informacione::all();
        return view('welcome', compact('informacion'));
    }

}
