<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pagoCurso;
use App\Models\Servicio;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    
    public function getTotalUsuarios()
    {
        $totalUsuarios = DB::table('users')->count();
        return $totalUsuarios;
    }


}
