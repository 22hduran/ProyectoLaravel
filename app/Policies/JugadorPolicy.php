<?php

namespace App\Policies;

use App\Models\Jugador;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JugadorPolicy
{
    public function update(User $user, Jugador $jugador)
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        if ($user->entrenador) {
            if ($user->entrenador->equipo_id == $jugador->equipo_id) {
                return true;
            }
        }

        return false;
    }

    
    public function delete(User $user, Jugador $jugador)
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        if ($user->entrenador) {
            if ($user->entrenador->equipo_id == $jugador->equipo_id) {
                return true;
            }
        }

        return false;
    }

}
