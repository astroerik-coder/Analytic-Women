<?php
namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\Servicio;
use Dompdf\Dompdf;

class servicios_cursosController extends Controller{

    public function mostrarDatos(){
        $cursos = Curso::all();
        $servicios = Servicio::all();
            return view('serviciohome', compact('cursos', 'servicios'));
        }

    public function reporteCursos(){
        $reporteCursos = Curso::all();
        $dompdf = new Dompdf();
        $html = view('layouts.reportes.reporteCursos', compact('reporteCursos'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}