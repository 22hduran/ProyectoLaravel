<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Posicion;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $posiciones = Posicion::all();
        $equipos = Equipo::all();
        return view('crear-jugador', ['posiciones' => $posiciones, 'equipos' => $equipos]);
    }


    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $path = $request->file('foto')->store('jugadores', 'public');
        $jugador->foto = 'storage/'.$path;
        $jugador->posicion_id = $request->posicion;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();

        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
