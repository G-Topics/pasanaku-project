<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function show($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado.'], 404);
        }
        return $estado;
    }

    public function index()
    {
        return Estado::all();
    }

    public function store(Request $request)
    {
        return Estado::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado->update($request->all());
        return $estado;
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        $estado->delete();

        return response()->json(['message' => 'Estado eliminado correctamente'], 200);
    }
}
