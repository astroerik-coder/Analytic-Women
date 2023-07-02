<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviciosController extends Controller
{
    public function mostrarServicios()
    {
        $servicios = Servicio::all();
        return view('servicios', compact('servicios'));
    }
}
