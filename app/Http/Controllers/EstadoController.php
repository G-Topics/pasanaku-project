<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{

    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }


    public function show($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return $this->responder->response('error', 801, null, 'Estado no encontrado', now(), null);
        }
        return $this->responder->response('success', 800, $estado, 'Estado encontrado', now(), null);
    }

    public function index()
    {
        $estados= Estado::all();
        return $this->responder->response('success',800, $estados,'Lista de estados recuperada', now(),null);
    }

    public function store(Request $request)
    {
        $estado= Estado::create($request->all());
        return $this->responder->response('success', 800, $estado, 'Estado creado exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado->update($request->all());
        return $this->responder->response('success', 800, $estado, 'Estado actualizado exitosamente', now(), null);
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return $this->responder->response('error', 801, null, 'Estado no encontrado', now(), null);
        }

        $estado->delete();

        return $this->responder->response('success', 800, null, 'Estado eliminado correctamente', now(), null);
    }
}
