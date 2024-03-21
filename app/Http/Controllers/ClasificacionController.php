<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    public function mostrarClasificacion()
    {
        $equipos = Equipo::all();

        foreach ($equipos as $equipo) {
            $partidos = Partido::where('local_equipo_id', $equipo->id)
                ->orWhere('visitante_equipo_id', $equipo->id)
                ->get();

            $victorias = 0;
            $empates = 0;
            $derrotas = 0;
            $golesFavor = 0;
            $golesContra = 0;

            foreach ($partidos as $partido) {
                if ($partido->local_equipo_id == $equipo->id) {
                    $golesFavor += $partido->goles_local;
                    $golesContra += $partido->goles_visitante;
                    if ($partido->goles_local > $partido->goles_visitante) {
                        $victorias++;
                    } elseif ($partido->goles_local == $partido->goles_visitante) {
                        $empates++;
                    } else {
                        $derrotas++;
                    }
                } else {
                    $golesFavor += $partido->goles_visitante;
                    $golesContra += $partido->goles_local;
                    if ($partido->goles_visitante > $partido->goles_local) {
                        $victorias++;
                    } elseif ($partido->goles_visitante == $partido->goles_local) {
                        $empates++;
                    } else {
                        $derrotas++;
                    }
                }
            }

            // Calcular puntos
            $puntos = ($victorias * 3) + $empates;

            // Guardar los datos en la tabla Clasificacion
            Clasificacion::updateOrCreate(
                ['equipo_id' => $equipo->id],
                [
                    'partidos' => $victorias + $empates + $derrotas,
                    'victorias' => $victorias,
                    'empates' => $empates,
                    'derrotas' => $derrotas,
                    'golesFavor' => $golesFavor,
                    'golesContra' => $golesContra,
                    'puntos' => $puntos,
                ]
            );
        }

        // Obtener los datos de clasificación ordenados por puntos
        $clasificaciones = Clasificacion::with('equipo')->orderBy('puntos', 'desc')->get();

        return view('clasificacion', ['clasificaciones' => $clasificaciones]);
    }



}
