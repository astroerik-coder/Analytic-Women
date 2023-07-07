<?php

namespace App\Http\Controllers;
use App\Models\Datoscontact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class datoscontactController extends Controller
{
    //
  
    public function create(){
    return view('indice');
    }
    public function store(Request $request){
        $contactos=new Datoscontact;
        $contactos->nombre=$request->input('nombre');
        $contactos->apellidos=$request->input('apellidos');
        $contactos->email=$request->input('email');
        $contactos->password=$request->input('password');
        $contactos->confirmacion=$request->input('confirmacion');
        $contactos->save();
        return redirect()->route('indice');
    }
}



