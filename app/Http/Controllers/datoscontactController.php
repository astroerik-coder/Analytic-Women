<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class datoscontactController extends Controller
{
    //
    public function create(){
    return view('indice');
    }
    public function store(Request $request){
        $contactos=new Contacto;
        $contactos->nombre=$request->input('nombre');
        $contactos->email=$request->input('email');
        $contactos->direccion=$request->input('direccion');
        $contactos->telefono=$request->input('telefono');
        $contactos->mensaje=$request->input('mensaje');
        $contactos->save();
        return redirect()->route('indice');
    }
}



