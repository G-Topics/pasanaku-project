<?php

namespace App\Http\Controllers;
use App\Models\EstadoInvitacion;
use Illuminate\Http\Request;

class EstadoInvitacionController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }


    public function show($id)
    {
        $estadoinvitacion = EstadoInvitacion::find($id);

        if (!$estadoinvitacion) {
            return $this->responder->response('error', 801, null, 'Estado de la invitación no encontrado', now(), null);
        }
        return $this->responder->response('success', 800, $estadoinvitacion, 'Estado de la invitación encontrado', now(), null);
    }

    public function index()
    {
        $estadosinvitaciones= EstadoInvitacion::all();
        return $this->responder->response('success',800, $estadosinvitaciones,'Lista de estadoinvitacions recuperada', now(),null);
    }

    public function store(Request $request)
    {
        $estadoinvitacion= EstadoInvitacion::create($request->all());
        return $this->responder->response('success', 800, $estadoinvitacion, 'estadoinvitacion creado exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $estadoinvitacion = EstadoInvitacion::findOrFail($id);
        $estadoinvitacion->update($request->all());
        return $this->responder->response('success', 800, $estadoinvitacion, 'Estado de la invitación actualizado exitosamente', now(), null);
    }

    public function destroy($id)
    {
        $estadoinvitacion = EstadoInvitacion::find($id);

        if (!$estadoinvitacion) {
            return $this->responder->response('error', 801, null, 'Estado de la invitación no encontrado', now(), null);
        }

        $estadoinvitacion->delete();

        return $this->responder->response('success', 800, null, 'Estado de la invitación eliminado correctamente', now(), null);
    }
}
