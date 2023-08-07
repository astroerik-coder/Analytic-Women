<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    public function contactanos(){
        return view('contactanos');
    }
    public function servicios(){
        return view ('servicios');
    }
    public function cursos(){
        return view ('cursos');
    }
    public function homeservicio(){
        return view ('serviciohome');
    }
}

