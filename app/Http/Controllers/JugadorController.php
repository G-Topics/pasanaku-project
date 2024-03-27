<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }

    public function show($ci)
    {
        $jugador = Jugador::find($ci);

        if (!$jugador) {
            return $this->responder->response('error', 801, null, 'Jugador no encontrado', now(), null);
        }
        return $this->responder->response('success', 800, $jugador, 'Jugador encontrado', now(), null);
    }

    public function index()
    {
        $jugadores = Jugador::all();
        return $this->responder->response('success',800, $jugadores,'Lista de jugadores recuperada', now(),null);
    }

    public function store(Request $request)
    {
        $jugador= Jugador::create($request->all());
        return $this->responder->response('success', 800, $jugador, 'Jugador creado exitosamente', now(), null);
    }

    public function update(Request $request, $ci)
    {
        $jugador = Jugador::findOrFail($ci);
        $jugador->update($request->all());
        return $this->responder->response('success', 800, $jugador, 'Jugador actualizado exitosamente', now(), null);
    }

    public function destroy($ci)
    {
        $jugador = Jugador::find($ci);

        if (!$jugador) {
            return $this->responder->response('error', 801, null, 'Jugador no encontrado', now(), null);
        }

        $jugador->delete();

        return $this->responder->response('success', 800, null, 'Jugador eliminado correctamente', now(), null);
    }
}
