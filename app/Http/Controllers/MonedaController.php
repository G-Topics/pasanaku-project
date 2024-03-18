<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function index()
    {
        return Moneda::all();
    }

    public function store(Request $request)
    {
        return Moneda::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $moneda = Moneda::findOrFail($id);
        $moneda->update($request->all());
        return $moneda;
    }

    public function destroy($id)
    {
        $moneda = Moneda::find($id);

        if (!$moneda) {
            return response()->json(['message' => 'Moneda no encontrada'], 404);
        }

        $moneda->delete();

        return response()->json(['message' => 'Moneda eliminada correctamente'], 200);
    }
}
