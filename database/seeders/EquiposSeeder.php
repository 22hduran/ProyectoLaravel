<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquiposSeeder extends Seeder
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
            [
                'nombreEquipo' => 'Kirkwood',
                'escudo' => 'storage/escudos/kirkwood.png',
            ],
            [
                'nombreEquipo' => 'Polaris',
                'escudo' => 'storage/escudos/polaris.png',
            ],

        ];

        foreach ($equipos as $equipo) {
            Equipo::create($equipo);
        }
    }
}
