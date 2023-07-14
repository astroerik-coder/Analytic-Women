<?php
namespace App\Http\Controllers;
use App\Models\Empleo;
use Dompdf\Dompdf;

class empleoReporteController extends Controller{

    public function reporteEmpleo(){
        $reporteEmpleo= Empleo::all();
        $dompdf = new Dompdf();
        $html = view('reporteEmpleos', compact('reporteEmpleo'))->render();

        // Modificar tamaño de fuente y estilos CSS
        $customCss = '<style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
                font-size: 12px;
            }

            th, td {
                border: 1px solid #dddddd;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>';

        $html = $customCss . $html;

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait'); // Establece el tamaño del papel y la orientación
        $dompdf->render();
        
        // Genera la respuesta con el contenido PDF
        $output = $dompdf->output();
        
        // Retorna una respuesta con el contenido PDF para mostrarlo en el navegador
        return response($output, 200)->header('Content-Type', 'application/pdf');
    }
}
