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
            //ALPINO
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
            //ROYAL ACADEMY
            [
                'nombre' => 'Joseph King',
                'foto' => 'storage/jugadores/Joseph_King.png',
                'posicion_id' => '1',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Nathan Swift',
                'foto' => 'storage/jugadores/Nathan_Swift.png',
                'posicion_id' => '2',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Peter Drent',
                'foto' => 'storage/jugadores/Peter_Drent.png',
                'posicion_id' => '2',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Ben Simmons',
                'foto' => 'storage/jugadores/Ben_Simmons.png',
                'posicion_id' => '2',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Alan Master',
                'foto' => 'storage/jugadores/Alan_Master.png',
                'posicion_id' => '2',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Herman Waldon',
                'foto' => 'storage/jugadores/Herman_Waldon.png',
                'posicion_id' => '3',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'John Bloom',
                'foto' => 'storage/jugadores/John_Bloom.png',
                'posicion_id' => '3',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Derek Swing',
                'foto' => 'storage/jugadores/Derek_Swing.png',
                'posicion_id' => '3',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Caleb Stonewall',
                'foto' => 'storage/jugadores/Caleb_Stonewall.png',
                'posicion_id' => '3',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'Daniel Hatch',
                'foto' => 'storage/jugadores/Daniel_Hatch.png',
                'posicion_id' => '4',
                'equipo_id' => '2',
            ],
            [
                'nombre' => 'David Samford',
                'foto' => 'storage/jugadores/David_Samford.png',
                'posicion_id' => '4',
                'equipo_id' => '2',
            ],
            //ALIUS
            [
                'nombre' => 'Dave Quagmire',
                'foto' => 'storage/jugadores/Dave_Quagmire.png',
                'posicion_id' => '1',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Ben Blowton',
                'foto' => 'storage/jugadores/Ben_Blowton.png',
                'posicion_id' => '2',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Claire Lesnow',
                'foto' => 'storage/jugadores/Claire_Lesnow.png',
                'posicion_id' => '2',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Grant Icewater',
                'foto' => 'storage/jugadores/Grant_Icewater.png',
                'posicion_id' => '2',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Nigel August',
                'foto' => 'storage/jugadores/Nigel_August.png',
                'posicion_id' => '3',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Isabelle Trick',
                'foto' => 'storage/jugadores/Isabelle_Trick.png',
                'posicion_id' => '3',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Jordan Greenway',
                'foto' => 'storage/jugadores/Jordan_Greenway.png',
                'posicion_id' => '3',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Bryce Whitingale',
                'foto' => 'storage/jugadores/Bryce_Whitingale.png',
                'posicion_id' => '4',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Claude Beacons',
                'foto' => 'storage/jugadores/Claude_Beacons.png',
                'posicion_id' => '4',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Hunter Foster',
                'foto' => 'storage/jugadores/Hunter_Foster.png',
                'posicion_id' => '4',
                'equipo_id' => '3',
            ],
            [
                'nombre' => 'Xavier Schiller',
                'foto' => 'storage/jugadores/Xavier_Schiller.png',
                'posicion_id' => '4',
                'equipo_id' => '3',
            ],
            //ZEUS
            [
                'nombre' => 'Ross Sidon',
                'foto' => 'storage/jugadores/Ross_Sidon.png',
                'posicion_id' => '1',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Lane War',
                'foto' => 'storage/jugadores/Lane_War.png',
                'posicion_id' => '2',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Hadrian Diesel',
                'foto' => 'storage/jugadores/Hadrian_Diesel.png',
                'posicion_id' => '2',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Dany Wood',
                'foto' => 'storage/jugadores/Dany_Wood.png',
                'posicion_id' => '2',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Apollo Light',
                'foto' => 'storage/jugadores/Apollo_Light.png',
                'posicion_id' => '2',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Arion Matlock',
                'foto' => 'storage/jugadores/Arion_Matlock.png',
                'posicion_id' => '3',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Artie Mishman',
                'foto' => 'storage/jugadores/Artie_Mishman.png',
                'posicion_id' => '3',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Wesley Knox',
                'foto' => 'storage/jugadores/Wesley_Knox.png',
                'posicion_id' => '3',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Jonas Demetrius',
                'foto' => 'storage/jugadores/Jonas_Demetrius.png',
                'posicion_id' => '4',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Byron Love',
                'foto' => 'storage/jugadores/Byron_Love.png',
                'posicion_id' => '4',
                'equipo_id' => '4',
            ],
            [
                'nombre' => 'Percy Rust',
                'foto' => 'storage/jugadores/Percy_Rust.png',
                'posicion_id' => '4',
                'equipo_id' => '4',
            ],
        ];


        foreach ($jugadores as $jugador) {
            Jugador::create($jugador);
        }

    }
}
