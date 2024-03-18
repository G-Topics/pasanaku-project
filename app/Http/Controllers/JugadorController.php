<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        return Jugador::all();
    }

    public function store(Request $request)
    {
        return Jugador::create($request->all());
    }

    public function update(Request $request, $ci)
    {
        $jugador = Jugador::findOrFail($ci);
        $jugador->update($request->all());
        return $jugador;
    }
    public function show($ci)
    {
        $jugador = Jugador::find($ci);

        if (!$jugador) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }
        return $jugador;
    }

    public function destroy($ci)
    {
        $jugador = Jugador::find($ci);

        if (!$jugador) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }

        $jugador->delete();

        return response()->json(['message' => 'Jugador eliminado correctamente'], 200);
    }
}
