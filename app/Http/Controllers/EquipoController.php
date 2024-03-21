<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Posicion;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function mostrarEquipos()
    {
        $equipos = Equipo::all();
        return view('equipos', ['equipos' => $equipos]);
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('crear-equipo');
    }

    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombreEquipo = $request->nombreEquipo;
        $path = $request->file('escudo')->store('escudos', 'public');
        $equipo->escudo = 'storage/'.$path;
        $equipo->save();

        return view('dashboard');
    }

    public function show(string $equipo)
    {
        $equipo = Equipo::findOrFail($equipo);
        $jugadores = Jugador::all();
        $posiciones = Posicion::all();
        $entrenadores = Entrenador::all();
    
        return view('detalle', ['equipo' => $equipo, 'jugadores' => $jugadores, 'posiciones' => $posiciones, 'entrenadores' => $entrenadores]);
    }
    

    public function edit(string $id)
    {
        $equipo = Equipo::findOrFail($id);
        $this->authorize('update', $equipo);
        return view("editar-equipo", compact('equipo'));
    }
    

    public function update(Request $request, string $id)
    {
        $equipo = Equipo::find($id);
        $equipo->nombreEquipo = $request->nombreEquipo;
        if ($request->hasFile('escudo')) {
            $escudoPath = $request->file('escudo')->store('escudos', 'public');
            $equipo->escudo = 'storage/' . $escudoPath;
        }
        $equipo->save();
        return redirect('equipos');
    }

    public function destroy(string $id)
    {
        //
    }
}
