<?php
namespace App\Http\Controllers;
use App\Models\Cursoscapacitacion;
use App\Models\Servicio;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\serviciosController;
use Dompdf\Dompdf;



class servicios_cursosController extends Controller{


 public function mostrarDatos(){
    $cursos = Cursoscapacitacion::all();
    $servicios = Servicio::all();
        return view('cursos', compact('cursos', 'servicios'));
    }

    public function reporteCursos(){
        $reporteCursos = Cursoscapacitacion::all();
        $dompdf = new Dompdf();
        $html = view('reporteCursos', compact('reporteCursos'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}