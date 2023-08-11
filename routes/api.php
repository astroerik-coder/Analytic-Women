<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIEventoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 

//CRUD de eventos
Route::get('/eventos', [APIEventoController::class, 'obtenerEventos']);
Route::get('/eventos/{id}', [APIEventoController::class, 'obtenerEventosId']);
Route::post('/eventos', [APIEventoController::class, 'crearEvento']);
Route::put('/eventos/{id}', [APIEventoController::class, 'actualizarEvento']);
Route::delete('/eventos/{id}', [APIEventoController::class, 'eliminarEvento']);

//Empleo
Route::get('/empleos', [APIEventoController::class, 'obtenerEmpleos']);

//Cursos
Route::get('/cursos', [APIEventoController::class, 'obtenerCursos']);

//Pago
Route::get('/pagos', [APIEventoController::class, 'obtenerPagos']);

//Empresas
Route::get('/empresas', [APIEventoController::class, 'obtenerEmpresas']);
