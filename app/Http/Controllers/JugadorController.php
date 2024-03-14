<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Posicion;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $jugador = Jugador::find($id);
        return view("editar-jugador", ['jugador' => $jugador]);
    }

    public function update(Request $request, string $id)
    {
        $jugador = Jugador::find($id);
        $jugador->nombre = $request->nombre;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('jugadores', 'public');
            $jugador->foto = 'storage/' . $fotoPath;
        }
        $jugador->equipo_id = $request->equipo;
        $jugador->posicion_id = $request->posicion;
        $jugador->save();
        return redirect('dashboard');
    }

    public function destroy(string $id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();

        return redirect('/dashboard');
    }
}
