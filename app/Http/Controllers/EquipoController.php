<?php

namespace App\Http\Controllers;

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

    public function mostrarDetalles($id)
    {
        $equipo = Equipo::findOrFail($id);
        $jugadores = Jugador::all();
        $posiciones = Posicion::all();

        return view('detalle', ['equipo' => $equipo, 'jugadores' => $jugadores, 'posiciones' => $posiciones]);
    }

}
