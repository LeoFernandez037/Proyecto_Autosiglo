<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\persona;
use Illuminate\Http\Request;
class personaController extends Controller
{
    public function index()
    {
        $personas = persona::all();
        return $personas;
    }
    public function store(Request $request)
    {
        $persona = new persona();
        $persona->NOMBRES = $request->NOMBRES;
        $persona->AP_PATERNO = $request->AP_PATERNO;
        $persona->AP_MATERNO = $request->AP_MATERNO;
        $persona->FECHA_NACIMIENTO = $request->FECHA_NACIMIENTO;

        $persona->save();
    }
    public function show(string $id)
    {
        $persona = persona::find($id);
        return $persona;
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
