<?php

namespace Database\Seeders;

use App\Models\Posicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosicionesSeeder extends Seeder
{
    public function run(): void
    {
        $posiciones = [
            [
                'posicion' => 'Portero',
                'imgPosicion' => 'storage/posiciones/GK.png',
            ],
            [
                'posicion' => 'Defensa',
                'imgPosicion' => 'storage/posiciones/DF.png',
            ],
            [
                'posicion' => 'Mediocentro',
                'imgPosicion' => 'storage/posiciones/MF.png',
            ],
            [
                'posicion' => 'Delantero',
                'imgPosicion' => 'storage/posiciones/FW.png',
            ],
        ];

        foreach ($posiciones as $posicion) {
            Posicion::create($posicion);
        }
    }
}
