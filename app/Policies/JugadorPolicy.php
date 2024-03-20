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

    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    // public function view(User $user, Jugador $jugador): bool
    // {
    //     //
    // }

    // public function create(User $user): bool
    // {
    //     //
    // }


    // public function restore(User $user, Jugador $jugador): bool
    // {
    //     //
    // }

    // public function forceDelete(User $user, Jugador $jugador): bool
    // {
    //     //
    // }
}
