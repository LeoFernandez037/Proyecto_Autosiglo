<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class personaController extends Controller
{
    public function index()
    {
        $personas = persona::all();
        if ($personas->isEmpty()) {
            $data = [
                'message' => 'No se encontraron personas',
                'status' => '200'
            ];
            return response()->json($data);
        }
        $data = [
            'personas' => $personas,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'NOMBRES' => 'required',
            'AP_PATERNO' => 'required',
            'AP_MATERNO' => 'required',
            'CORREO_ELECTRONICO' => 'required|email',
            'TELEFONO' => 'required'
        ]);
        if ($validator->fails()) {
            $data = [
                'message' => 'ERROR',
                'errores' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        $persona = persona::create([
            'NOMBRES' => $request->NOMBRES,
            'AP_PATERNO' => $request->AP_MATERNO,
            'AP_MATERNO' => $request->AP_MATERNO,
            'CORREO_ELECTRONICO' => $request->CORREO_ELECTRONICO,
            'TELEFONO' => $request->TELEFONO
        ]);

        if (!$persona) {
            $data = [
                'message' => 'Error al crear estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'persona' => $persona,
            'status' => 201
        ];
        response()->json($data, 201);
    }
    public function show($ID_PERSONA)
    {
        $persona = persona::find($columns = [$ID_PERSONA]);

        if (!$persona) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 200
            ];
            return response()->json($data, 404);
        }

        $data = [
            'persona' => $persona,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    public function update(Request $request, string $id)
    {
        $persona = persona::findOrFail($request->$id);
        $persona->NOMBRES = $request->NOMBRES;
        $persona->AP_PATERNO = $request->AP_PATERNO;
        $persona->AP_MATERNO = $request->AP_MATERNO;
        $persona->FECHA_NACIMIENTO = $request->FECHA_NACIMIENTO;
        $persona->save();
        return $persona;
    }
    public function destroy(string $id)
    {
        $persona = persona::destroy($id);
        return $persona;
    }
}
