<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datoscontactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\serviciosController;

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

Route::get('/servicios', [homeController::class,'servicios'])->name('servicios');
Route::get('/servicios', [serviciosController::class,'mostrarServicios'])->name('servicios');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

//CRUD
    Route::get('/crud', function () {
        return view('tables.crud');
    })->name('crud');

   Route::get('/eventos', function () {
        return view('tables.eventos');
    })->name('eventos');
 /* 
    Route::get('/blog', function () {
        return view('tables.blog');
    })->name('blog');

    Route::get('/ciudades', function () {
        return view('tables.ciudades');
    })->name('ciudades'); 

    Route::get('/provincias', function () {
        return view('tables.provincias');
    })->name('provincias');
*/
});

