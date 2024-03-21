<?php

namespace App\Policies;

use App\Models\Equipo;
use App\Models\User;

class EquipoPolicy
{
    public function update(User $user, Equipo $equipo)
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        if ($user->entrenador) {
            if ($user->entrenador->equipo_id == $equipo->id) {
                return true;
            }
        }

        return false;
    }
    public function __construct()
    {
        //
    }
}
