<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Dompdf\Dompdf;

class ClienteReporteController extends Controller{

    public function reporteCliente(){
        $reporteCliente= Cliente::all();
        $dompdf = new Dompdf();
        $html = view('layouts.reportes.reporteClientes', compact('reporteCliente'))->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}
