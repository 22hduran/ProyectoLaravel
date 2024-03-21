<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jornada;
use App\Models\Partido;
use Illuminate\Http\Request;

class JornadaController extends Controller
{
    public function comenzarJornada(Request $request)
    {
        $jornada = new Jornada();
        $jornada->save();

        $jornadaId = $jornada->id;

        $equipos = Equipo::all()->shuffle();

        $parejasEquipos = $equipos->chunk(2);

        foreach ($parejasEquipos as $pareja) {
            if ($pareja->count() >= 2) {
                $localEquipo = $pareja->first();
                $visitanteEquipo = $pareja->last();

                $partido = new Partido();
                $partido->local_equipo_id = $localEquipo->id;
                $partido->visitante_equipo_id = $visitanteEquipo->id;
                $partido->jornada_id = $jornadaId;
                $partido->save();
            }
        }

        return redirect()->route('mostrarPartidosJornada');
    }
    public function mostrarPartidosJornada()
    {
        $jornada = Jornada::latest()->first();

        $partidos = Partido::where('jornada_id', $jornada->id)->get();

        return view('partidos-jornada', compact('partidos'));
    }

    public function jugarPartidos()
    {
        $jornadaActual = Jornada::latest()->first();

        if ($jornadaActual) {
            $partidos = Partido::where('jornada_id', $jornadaActual->id)->get();

            foreach ($partidos as $partido) {
                $partido->goles_local = rand(0, 5);
                $partido->goles_visitante = rand(0, 5);
                $partido->save();
            }

            return view('resultados-partidos', ['partidos' => $partidos]);
        } else {
            return redirect()->back()->with('error', 'No hay jornada actual.');
        }
    }



}
