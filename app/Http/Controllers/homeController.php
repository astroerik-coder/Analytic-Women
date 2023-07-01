<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    public function indice(){
        return view('indice');
    }
    public function servicios(){
        return view('servicios');
    }
}

