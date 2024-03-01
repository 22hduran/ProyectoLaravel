<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
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

        return view('detalle', ['equipo' => $equipo]);
    }

}
