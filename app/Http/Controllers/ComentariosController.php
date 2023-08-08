<?php
namespace App\Http\Controllers;
use App\Models\Comentario;
use Dompdf\Dompdf;

class ComentariosController extends Controller{

    public function reporteComentario(){
        $reporteComentario=Comentario::all();
        $dompdf = new Dompdf();
        $html = view('layouts.reportes.reporteComentarios', compact('reporteComentario'))->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}
