<?php

namespace Database\Seeders;

use App\Models\Entrenador;
use App\Models\Equipo;
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
                'nombre' => 'alpine',
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
                'id' => '1',
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

    }
}
