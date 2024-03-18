<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::get();
 
        return response()->json($jugadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador->ci = $request->ci;
        $jugador->nombre = $request->nombre;
        $jugador->telefono = $request->telefono;
        $jugador->email = $request->email;
        $jugador->save();
 
        return response()->json($jugador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show($ci)
    {
        $jugador = Jugador::find($ci);
        return response()->json($jugador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ci)
    {
        $jugador = Jugador::find($ci);
        $jugador->nombre = $request->nombre;
        $jugador->telefono = $request->telefono;
        $jugador->email = $request->email;
        $jugador->save();
 
        return response()->json($jugador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        Jugador::destroy($jugador);
 
        return response()->json(['message' => 'Deleted']);
    }
}
