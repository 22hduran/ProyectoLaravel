<?php

namespace Database\Seeders;

use App\Models\Jugador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadoresSeeder extends Seeder
{
    public function run(): void
    {
        $jugadores = [
            //ALPINO
            [
                'nombre' => 'Adam Ropes',
                'foto' => 'storage/jugadores/Adam_Ropes.png',
                'posicion_id' => '1',
                'equipo_id' => '1',
            ],
            [
                'nombre' => 'Joaquine Town',
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
            //KIRKWOOD
            [
                'nombre' => 'Trice Topper',
                'foto' => 'storage/jugadores/Trice_Topper.png',
                'posicion_id' => '1',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Ricky Clover',
                'foto' => 'storage/jugadores/Ricky_Clover.png',
                'posicion_id' => '2',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Malcolm_Night',
                'foto' => 'storage/jugadores/Malcolm_Night.png',
                'posicion_id' => '2',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'York Nashmith',
                'foto' => 'storage/jugadores/York_Nashmith.png',
                'posicion_id' => '3',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Toby Damian',
                'foto' => 'storage/jugadores/Toby_Damian.png',
                'posicion_id' => '2',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Alfred Meenan',
                'foto' => 'storage/jugadores/Alfred_Meenan.png',
                'posicion_id' => '3',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Zachary Moore',
                'foto' => 'storage/jugadores/Zachary_Moore.png',
                'posicion_id' => '3',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Tyler Murdock',
                'foto' => 'storage/jugadores/Tyler_Murdock.png',
                'posicion_id' => '4',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Thomas Murdock',
                'foto' => 'storage/jugadores/Thomas_Murdock.png',
                'posicion_id' => '4',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Axel Blaze',
                'foto' => 'storage/jugadores/Axel_Blaze.png',
                'posicion_id' => '4',
                'equipo_id' => '5',
            ],
            [
                'nombre' => 'Marvin Murdock',
                'foto' => 'storage/jugadores/Marvin_Murdock.png',
                'posicion_id' => '4',
                'equipo_id' => '5',
            ],
            //POLARIS
            [
                'nombre' => 'Mickey Way',
                'foto' => 'storage/jugadores/Mickey_Way.png',
                'posicion_id' => '1',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Acker Reese',
                'foto' => 'storage/jugadores/Acker_Reese.png',
                'posicion_id' => '2',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Caesar Pike',
                'foto' => 'storage/jugadores/Caesar_Pike.png',
                'posicion_id' => '2',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Cignus Starkey',
                'foto' => 'storage/jugadores/Cignus_Starkey.png',
                'posicion_id' => '2',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Ari Zimmerman',
                'foto' => 'storage/jugadores/Ari_Zimmerman.png',
                'posicion_id' => '2',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Jude Sharp',
                'foto' => 'storage/jugadores/Jude_Sharp.png',
                'posicion_id' => '3',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Oliver Golight',
                'foto' => 'storage/jugadores/Oliver_Golightly.png',
                'posicion_id' => '3',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Larry Lyre',
                'foto' => 'storage/jugadores/Larry_Lyre.png',
                'posicion_id' => '3',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Oscar Pio',
                'foto' => 'storage/jugadores/Oscar_Pio.png',
                'posicion_id' => '4',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Elliot Ember',
                'foto' => 'storage/jugadores/Elliot_Ember.png',
                'posicion_id' => '4',
                'equipo_id' => '6',
            ],
            [
                'nombre' => 'Eddy O Ryan',
                'foto' => 'storage/jugadores/Eddy_ORyan.png',
                'posicion_id' => '4',
                'equipo_id' => '6',
            ],
        ];


        foreach ($jugadores as $jugador) {
            Jugador::create($jugador);
        }
    }
}
