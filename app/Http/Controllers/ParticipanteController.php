<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }

    public function show($id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return $this->responder->response('error', 801, null, 'Participante no encontrado', now(), null);
        }
        return $this->responder->response('success', 800, $participante, 'Participante encontrado', now(), null);
    }

    public function index()
    {
        $participantes = Participante::all();
        return $this->responder->response('success',800, $participantes,'Lista de participantes recuperada', now(),null);
    }

    public function store(Request $request)
    {
        $participante= Participante::create($request->all());
        return $this->responder->response('success', 800, $participante, 'Participante creado exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $participante = Participante::findOrFail($id);
        $participante->update($request->all());
        return $this->responder->response('success', 800, $participante, 'Participante actualizado exitosamente', now(), null);
    }

    public function destroy($id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return $this->responder->response('error', 801, null, 'Participante no encontrado', now(), null);
        }

        $participante->delete();

        return $this->responder->response('success', 800, null, 'Participante eliminado correctamente', now(), null);
    }
}
