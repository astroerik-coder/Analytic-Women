<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Pago;
use App\Models\Curso;
use App\Models\Empleo;
use App\Models\Empresa;
use Illuminate\Support\Facades\Validator;

class APIEventoController extends Controller
{
    //Eventos

    // Obtener
    public function obtenerEventos()
    {
        try {
            $eventos = Evento::all();

            if ($eventos->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron datos.'], 404);
            }

            return response()->json($eventos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los eventos.'], 500);
        }
    }


    // Obtener un evento por su ID
    public function obtenerEventosId($id)
    {
        $evento = Evento::find($id);

        if (!$evento) {
            return response()->json(['mensaje' => 'Evento no encontrado'], 404);
        }

        return response()->json($evento);
    }

    // Crear un nuevo evento
    public function crearEvento(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'NOMBRE_EVT' => 'required',
            'DESCRIPCION_EVT' => 'required',
            'FECHA_EVT' => 'required|date',
            'HORA_EVT' => 'required',
            'UBICACION_EVT' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errores' => $validator->errors()], 400);
        }

        $evento = Evento::create($request->all());

        return response()->json($evento, 201);
    }

    // Actualizar un evento
    public function actualizarEvento(Request $request, $id)
    {
        $evento = Evento::find($id);

        if (!$evento) {
            return response()->json(['mensaje' => 'Evento no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'NOMBRE_EVT' => 'required',
            'DESCRIPCION_EVT' => 'required',
            'FECHA_EVT' => 'required|date',
            'HORA_EVT' => 'required',
            'UBICACION_EVT' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errores' => $validator->errors()], 400);
        }

        $evento->update($request->all());

        return response()->json($evento);
    }

    // Eliminar un evento
    public function eliminarEvento($id)
    {
        $evento = Evento::find($id);

        if (!$evento) {
            return response()->json(['mensaje' => 'Evento no encontrado'], 404);
        }

        $evento->delete();

        return response()->json(['mensaje' => 'Evento eliminado']);
    }

    //Empleo
    public function obtenerEmpleos()
    {
        try {
            $empleos = Empleo::all();

            if ($empleos->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron datos.'], 404);
            }

            return response()->json($empleos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los empleos.'], 500);
        }
    }



    //Cursos
    public function obtenerCursos()
    {
        try {
            $cursos = Curso::all();

            if ($cursos->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron datos.'], 404);
            }

            return response()->json($cursos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los cursos.'], 500);
        }
    }



    //Pago
    public function obtenerPagos()
    {
        try {
            $pagos = Pago::all();

            if ($pagos->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron datos.'], 404);
            }

            return response()->json($pagos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los pagos.'], 500);
        }
    }

    //Empresas
    public function obtenerEmpresas()
    {
        try {
            $empresas = Empresa::all();

            if ($empresas->isEmpty()) {
                return response()->json(['mensaje' => 'No se encontraron datos.'], 404);
            }

            return response()->json($empresas);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener las empresas.'], 500);
        }
    }
}
