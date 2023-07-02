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

    Route::get('/crud', function () {
        return view('crud');
    })->name('crud');

    Route::get('/users', function () {
        return view('tables.users');
    })->name('users');

    Route::get('/eventos', function () {
        return view('tables.eventos');
    })->name('eventos');

    Route::get('/clientes', function () {
        return view('tables.clientes');
    })->name('clientes');

});

