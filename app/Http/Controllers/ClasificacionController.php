<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use App\Models\Equipo;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    public function mostrarClasificacion()
    {
        $equipos = Equipo::all();
        
        foreach ($equipos as $equipo) {
            $victorias = rand(0, 10);
            $empates = rand(0, 5);
            
            $puntos = ($victorias * 3) + $empates;
            Clasificacion::updateOrCreate(
                ['equipo_id' => $equipo->id],
                [
                    'partidos' => rand(0, 20), 
                    'victorias' => $victorias, 
                    'empates' => $empates, 
                    'derrotas' => rand(0, 8),
                    'golesFavor' => rand(0, 40),
                    'golesContra' => rand(0, 40), 
                    'puntos' => $puntos,
                ]
            );
        }

        $clasificaciones = Clasificacion::with('equipo')->orderBy('puntos', 'desc')->get();

        return view('clasificacion', ['clasificaciones' => $clasificaciones]);
    }

}
