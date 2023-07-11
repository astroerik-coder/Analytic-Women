<?php
namespace App\Http\Controllers;
use App\Models\Cursoscapacitacion;
use App\Models\Servicio;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\serviciosController;


class servicios_cursosController extends Controller{


 public function mostrarDatos(){
    $cursos = Cursoscapacitacion::all();
    $servicios = Servicio::all();
        return view('cursos', compact('cursos', 'servicios'));
    }
}