<?php

use App\Http\Controllers\cursosController;
use App\Http\Controllers\CursosController as ControllersCursosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datoscontactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\servicios_cursosController;
use App\Http\Controllers\reportesController;
use App\Http\Controllers\pagoCursosController;
use App\Http\Controllers\empleoReporteController;



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

Route::get('/indice',[homeController::class,'indice'])->name('indice');
Route::post('/indice',[datoscontactController::class, 'store'])->name('indice');

Route::get('/servicios', [homeController::class,'cursos'])->name('cursos');

//Ruta que tiene el controller con ambas tablas 
Route::get('/servicios', [servicios_cursosController::class,'mostrarDatos'])->name('cursos');

Route::get('/pdf', [reportesController::class, 'mostrar']);

//Ruta del reporte de pago de cursos
Route::get('/reportePagoCurso', [pagoCursosController::class, 'reportePagoCursos'])->name('reportePagoCurso');
//Ruta del reporte de servicios
Route::get('/reporteCursos', [servicios_cursosController::class, 'reporteCursos'])->name('reporteCursos');
//Ruta del reporte de empleos
Route::get('/reporteEmpleos', [empleoReporteController::class, 'reporteEmpleo'])->name('reporteEmpleos');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/crud', function () {
        return view('crud');
    })->name('crud');

    Route::get('/users', function () {
        return view('tables.users');
    })->name('users');
});

