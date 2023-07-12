<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pagoCurso;
use App\Models\Servicio;
use Dompdf\Dompdf;


class pagoCursosController extends Controller{

    public function reportePagoCursos(){
        $pagoCursos = pagoCurso::all();
        $dompdf = new Dompdf();
        $html = view('reportepagoCursos', compact('pagoCursos'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}
