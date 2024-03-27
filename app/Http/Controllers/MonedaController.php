<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    protected $responder;

    public function __construct(ResponseController $responder)
    {
        $this->responder = $responder;
    }

    public function show($id)
    {
        $moneda = Moneda::find($id);

        if (!$moneda) {
            return $this->responder->response('error', 801, null, 'Moneda no encontrada', now(), null);
        }
        return $this->responder->response('success', 800, $moneda, 'Moneda encontrada', now(), null);
    }    

    public function index()
    {
        $moneda= Moneda::all();        
        return $this->responder->response('success', 800, $moneda, 'Lista de Monedas recuperada', now(), null);
    }

    public function store(Request $request)
    {
        $moneda= Moneda::create($request->all());
        return $this->responder->response('success', 800, $moneda, 'Moneda creada exitosamente', now(), null);
    }

    public function update(Request $request, $id)
    {
        $moneda = Moneda::findOrFail($id);
        $moneda->update($request->all());
        return $this->responder->response('success', 800, $moneda, 'Moneda actualizada exitosamente', now(), null);
    }
    

    public function destroy($id)
    {
        $moneda = Moneda::find($id);

        if (!$moneda) {
            return $this->responder->response('error', 801, null, 'Moneda no encontrada', now(), null);
        }

        $moneda->delete();

        return $this->responder->response('success', 800, null, 'Moneda eliminada correctamente', now(), null);
    }
}
