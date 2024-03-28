<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;

class PartidaController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }

    public function show($id)
    {
        $partida = Partida::find($id);

        if (!$partida) {
            return $this->responder->response('error', 801, null, 'Partida no encontrada', now(), null);
        }
        return $this->responder->response('success', 800, $partida, 'Partida encontrada', now(), null);
    }

    public function index()
    {
        $partidas = Partida::all();
        return $this->responder->response('success',800, $partidas,'Lista de partidas recuperada', now(),null);
    }

    public function store(Request $request)
    {
        $partida= Partida::create($request->all());
        return $this->responder->response('success', 800, $partida, 'Partida creada exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $partida = Partida::findOrFail($id);
        $partida->update($request->all());
        return $this->responder->response('success', 800, $partida, 'Partida actualizada exitosamente', now(), null);
    }

    public function destroy($id)
    {
        $partida = Partida::find($id);

        if (!$partida) {
            return $this->responder->response('error', 801, null, 'Partida no encontrada', now(), null);
        }

        $partida->delete();

        return $this->responder->response('success', 800, null, 'Partida eliminada correctamente', now(), null);
    }
}
