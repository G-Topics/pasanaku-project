<?php

namespace App\Http\Controllers;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function show($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['message' => 'Rol no encontrado.'], 404);
        }
        return $rol;
    }

    public function index()
    {
        return Rol::all();
    }

    public function store(Request $request)
    {
        return Rol::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return $rol;
    }

    public function destroy($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['message' => 'rol no encontrado'], 404);
        }

        $rol->delete();

        return response()->json(['message' => 'rol eliminado correctamente'], 200);
    }
}
