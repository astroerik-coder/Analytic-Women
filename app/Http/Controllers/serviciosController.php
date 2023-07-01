<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function index()
{
    $servicios = Servicio::all();
    return view('servicios', ['servicios' => $servicios]);
}

}
