<?php

namespace Database\Seeders;

use App\Models\Entrenador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrenadoresSeeder extends Seeder
{
    public function run(): void
    {
                

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
            [
                'nombre' => 'Kakumei',
                'foto' => 'storage/entrenadores/kakumei.png',
                'equipo_id' => 5,
            ],
            [
                'nombre' => 'travis',
                'foto' => 'storage/entrenadores/travis.png',
                'equipo_id' => 6,
            ],
        ];

        foreach ($trainers as $trainer) {
            Entrenador::create($trainer);
        }
    }
}
