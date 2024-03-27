<?php

namespace App\Http\Controllers;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }

    public function show($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return $this->responder->response('error', 801, null, 'Rol no encontrado', now(), null);
        }
        return $this->responder->response('success', 800, $rol, 'Rol encontrado', now(), null);
    }

    public function index()
    {
        $rol= Rol::all();
        return $this->responder->response('success', 800, $rol, 'Lista de Roles recuperada', now(), null);
    }

    public function store(Request $request)
    {
        $rol= Rol::create($request->all());
        return $this->responder->response('success', 800, $rol, 'Rol Creado exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return $this->responder->response('success', 800, $rol, 'Rol actualizado exitosamente', now(), null);
    }

    public function destroy($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return $this->responder->response('error', 801, null, 'Rol no encontrado', now(), null);
        }

        $rol->delete();

        return $this->responder->response('success', 800, null, 'Rol eliminado correctamente', now(), null);
    }
}
