<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .mensaje {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
    
</head>
<body>
  

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datoscontactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\servicios_cursosController;
use App\Http\Controllers\reportesController;
use App\Http\Controllers\pagoCursosController;
use App\Http\Controllers\empleoReporteController;
use Illuminate\Support\Facades\View;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[homeController::class,'home'])->name('welcome');
Route::get('/contactanos',[homeController::class,'contactanos'])->name('contactanos');
Route::post('/contactanos',[datoscontactController::class, 'store'])->name('contactanos');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre']) && $_POST['apellidos']) {
    // Aquí procesas los datos del formulario y realizas el registro en la base de datos
    // Mostrar mensaje de éxito
    echo '<p><div class="mensaje">Su mensaje se ha guardado con éxito!!</div></p>';
    echo '<p>Volviendo a la página principal: <span id="countdown">5</span></p>';
    echo '<script>';
    echo 'var seconds = 5;';
    echo 'var countdown = setInterval(function() {';
    echo '    seconds--;';
    echo '    document.getElementById("countdown").textContent = seconds;';
    echo '    if (seconds <= 0) {';
    echo '        clearInterval(countdown);';
    echo '        window.location.href = "/contactanos";';
    echo '    }';
    echo '}, 1000);';
    echo '</script>';
    header("refresh:5;url=/contactanos");
    exit;
}

Route::get('/servicios', [homeController::class,'cursos'])->name('cursos');
//Ruta que tiene el controller con ambas tablas 
Route::get('/', 'InicioController@mostrarMisionVision');

//Route::get('/usuarios', [pagoCursosController::class, 'getTotalUsuarios'])->name('usuarios');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //CRUD
    Route::get('/crud', function () {return view('crud');})->name('crud');
    Route::get('/blogs', function () {  return view('layouts.components.tables.blogs'); })->name('blogs');
    Route::get('/categorias', function () {return view('layouts.components.tables.categorias'); })->name('categorias');
    Route::get('/ciudades', function () {return view('layouts.components.tables.ciudades'); })->name('ciudades');
    Route::get('/clientes', function () { return view('layouts.components.tables.clientes');})->name('clientes');
    Route::get('/comentarios', function () { return view('layouts.components.tables.comentarios');})->name('comentarios');
    Route::get('/contactos', function () { return view('layouts.components.tables.contactos');})->name('contactos');
    Route::get('/cursos', function () { return view('layouts.components.tables.cursos');})->name('cursos');
    Route::get('/empleos', function () { return view('layouts.components.tables.empleos');})->name('empleos');
    Route::get('/empresas', function () { return view('layouts.components.tables.empresas');})->name('empresas');
    Route::get('/eventos', function () { return view('layouts.components.tables.eventos');})->name('eventos');
    Route::get('/generos', function () { return view('layouts.components.tables.generos');})->name('generos');
    Route::get('/informaciones', function () { return view('layouts.components.tables.informaciones');})->name('informaciones');
    Route::get('/pagos', function () { return view('layouts.components.tables.pagos');})->name('pagos');
    Route::get('/provincias', function () { return view('layouts.components.tables.provincias');})->name('provincias');
    Route::get('/redes', function () {return view('layouts.components.tables.redes');})->name('redes');
    Route::get('/servicios', function () {return view('layouts.components.tables.servicios');})->name('servicios'); 


    //Ruta del reporte de pago de cursos
    Route::get('/reportePagoCurso', [pagoCursosController::class, 'reportePagoCursos'])->name('reportePagoCurso');
    //Ruta del reporte de servicios
    Route::get('/reporteCursos', [servicios_cursosController::class, 'reporteCursos'])->name('reporteCursos');
    //Ruta del reporte de empleos
    Route::get('/reporteEmpleos', [empleoReporteController::class, 'reporteEmpleo'])->name('reporteEmpleos');

});
?>
</body>
</html>