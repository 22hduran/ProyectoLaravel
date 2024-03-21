<?php

namespace Database\Seeders;

use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Posicion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(EquiposSeeder::class);
        $this->call(EntrenadoresSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PosicionesSeeder::class);
        $this->call(JugadoresSeeder::class);
    }
}
