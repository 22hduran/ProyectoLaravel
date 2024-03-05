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
        $equipos = [
            [
                'nombreEquipo' => 'Alpino',
                'escudo' => 'storage/escudos/alpino.png',
            ],
            [
                'nombreEquipo' => 'Royal Academy',
                'escudo' => 'storage/escudos/royalAcademy.png',
            ],
            [
                'nombreEquipo' => 'Alius',
                'escudo' => 'storage/escudos/alius.png',
            ],
            [
                'nombreEquipo' => 'Zeus',
                'escudo' => 'storage/escudos/zeus.png',
            ],

        ];

        foreach ($equipos as $equipo) {
            Equipo::create($equipo);
        }

        $trainers = [
            [
                'nombre' => 'Alpine',
                'foto' => 'storage/entrenadores/alpine.png',
                'equipo_id' => 1,
            ],
            [
                'nombre' => 'Ray Dark',
                'foto' => 'storage/entrenadores/raydark.png',
                'equipo_id' => 2,
            ],
            [
                'nombre' => 'Lina Schiller',
                'foto' => 'storage/entrenadores/linaschiller.png',
                'equipo_id' => 3,
            ],
            [
                'nombre' => 'Kratos',
                'foto' => 'storage/entrenadores/kratos.png',
                'equipo_id' => 4,
            ],
        ];

        foreach ($trainers as $trainer) {
            Entrenador::create($trainer);
        }


        $adminRole = Role::create(['name' => 'admin']);
        $entrenadorRole = Role::create(['name' => 'entrenador']);

        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        $adminUser->assignRole($adminRole);

        $entrenadores = [
            [
                'name' => 'alpine',
                'email' => 'alpine@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 1,
            ],
            [
                'name' => 'dark',
                'email' => 'dark@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 2,
            ],
            [
                'name' => 'lina',
                'email' => 'lina@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 3,
            ],
            [
                'name' => 'kratos',
                'email' => 'kratos@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 4,
            ]
        ];

        foreach ($entrenadores as $entrenador) {
            $entrenadorUser = User::create($entrenador);
            $entrenadorUser->assignRole($entrenadorRole);
        }


        $posiciones = [
            [
                'posicion' => 'portero',
                'imgPosicion' => 'storage/posiciones/GK.png',
            ],
            [
                'id' => '2',
                'posicion' => 'defensa',
                'imgPosicion' => 'storage/posiciones/DF.png',
            ],
            [
                'id' => '3',
                'posicion' => 'mediocentro',
                'imgPosicion' => 'storage/posiciones/MF.png',
            ],
            [
                'id' => '4',
                'posicion' => 'delantero',
                'imgPosicion' => 'storage/posiciones/FW.png',
            ],
        ];

        foreach ($posiciones as $posicion) {
            Posicion::create($posicion);
        }

        $jugadores = [
            [
                'nombre' => 'Adam Ropes',
                'foto' => 'storage/jugadores/Adam_Ropes.png',
                'posicion_id' => '1',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Joaquine Downtown',
                'foto' => 'storage/jugadores/Joaquine_Downtown.png',
                'posicion_id' => '2',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Milton Bindings',
                'foto' => 'storage/jugadores/Milton_Bindings.png',
                'posicion_id' => '2',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Spike Gleeson',
                'foto' => 'storage/jugadores/Spike_Gleeson.png',
                'posicion_id' => '2',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Sean Snowfield',
                'foto' => 'storage/jugadores/Sean_Snowfield.png',
                'posicion_id' => '3',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Kerry Bootgaiter',
                'foto' => 'storage/jugadores/Kerry_Bootgaiter.png',
                'posicion_id' => '3',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Maddox Rock',
                'foto' => 'storage/jugadores/Maddox_Rock.png',
                'posicion_id' => '3',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Robert Skipolson',
                'foto' => 'storage/jugadores/Robert_Skipolson.png',
                'posicion_id' => '3',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Shawn Froste',
                'foto' => 'storage/jugadores/Shawn_Froste.png',
                'posicion_id' => '4',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Aiden Froste',
                'foto' => 'storage/jugadores/Aiden_Froste.png',
                'posicion_id' => '4',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Kevin Dragonfly',
                'foto' => 'storage/jugadores/Kevin_Dragonfly.png',
                'posicion_id' => '4',
                'equipo_id' => '1',
            ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
            // [
            //     'nombre' => 'delantero',
            //     'foto' => 'storage/jugadores/GK.png',
            //     'posicion_id' => '1',
            //     'equipo_id' => '1',
            // ],
        ];


        foreach ($jugadores as $jugador) {
            Jugador::create($jugador);
        }

    }
}
