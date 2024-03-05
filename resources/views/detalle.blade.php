<x-app-layout>
    <style>
        .fotoJugador {
            max-width: 100px;
        }

        .card {
            width: auto;
            margin: 20px;
            cursor: pointer;
            transition: 0.4s;

        }

        .card:hover {
            transform: scale(1.05);
            transition: 0.4s;
        }

        section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content:space-around;
        }

        .equipo {
            width: 150px;
            text-align: center;
            font-weight: bold;
            margin-left: 690px;
            margin-bottom: 40px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $equipo->nombreEquipo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="equipo">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{ url($equipo->escudo) }}" alt="Escudo" class="max-w-100">
                    <p>{{ $equipo->nombreEquipo }}</p>
                </div>
            </div>
        </div>
        <h1 class="text-center text-white">JUGADORES</h1>
        <section>     
            @foreach ($jugadores as $jugador)
                @if ($jugador->equipo_id == $equipo->id)
                    <div class="card">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <p>{{ $jugador->nombre }}</p>
                                <img src="{{ url($jugador->foto) }}" alt="Foto" class="fotoJugador">
                                @foreach($posiciones as $posicion)
                                    @if($posicion->id == $jugador->posicion_id)
                                        <img src="{{ url($posicion->imgPosicion) }}" alt="Posicion">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </div>
</x-app-layout>
