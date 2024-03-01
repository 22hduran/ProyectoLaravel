<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'nombreEquipo' => 'Raimon',
                'escudo' => 'storage/app/public/escudos/raimon.png',
            ],
            [
                'nombreEquipo' => 'Zeus',
                'escudo' => 'storage/app/public/escudos/zeus.png',
            ],
            [
                'nombreEquipo' => 'Orfeo',
                'escudo' => 'storage/app/public/escudos/orfeo.png',
            ],
            [
                'nombreEquipo' => 'Little Giants',
                'escudo' => 'storage/app/public/escudos/littlegiants.png',
            ],

        ];

        foreach ($equipos as $equipo) {
            Equipo::create($equipo);
        }
        
        $trainers = [
            [
                'nombre' => 'Seymour Hillman',
                'foto' => 'storage/app/public/entrenadores/hillman.png',
                'equipo_id' => 1,
            ],
            [
                'nombre' => 'Kratos',
                'foto' => 'storage/app/public/entrenadores/kratos.png',
                'equipo_id' => 2,
            ],
            [
                'nombre' => 'Ray Dark',
                'foto' => 'storage/app/public/entrenadores/raydark.png',
                'equipo_id' => 3,
            ],
            [
                'nombre' => 'David Evans',
                'foto' => 'storage/app/public/entrenadores/davidEvans.png',
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
                'name' => 'hillman',
                'email' => 'hillman@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 1,
            ],
            [
                'name' => 'kratos',
                'email' => 'kratos@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 2,
            ],
            [
                'name' => 'dark',
                'email' => 'dark@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 3,
            ],
            [
                'name' => 'evans',
                'email' => 'evans@gmail.com',
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
                'imgPosicion' => 'storage/app/public/posiciones/GK.png',
            ],
            [
                'id' => '2',
                'posicion' => 'defensa',
                'imgPosicion' => 'storage/app/public/posiciones/DF.png',
            ],
            [
                'id' => '3',
                'posicion' => 'mediocentro',
                'imgPosicion' => 'storage/app/public/posiciones/MF.png',
            ],
            [
                'id' => '4',
                'posicion' => 'delantero',
                'imgPosicion' => 'storage/app/public/posiciones/FW.png',
            ],
        ];

        foreach ($posiciones as $posicion) {
            Posicion::create($posicion);
        }

    }
}
