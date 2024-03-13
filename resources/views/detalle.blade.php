<x-app-layout>
    <style>
        body {
            background-color: #111827;
        }
        .header {
        display: flex;
        width: 100%;
        flex-direction: row;
        justify-content: center;
        margin-bottom: 10px;
        margin-top: 10px;
        }
        .divGeneral {
        width: 60%;
        height: 100vh;
        margin-left: 330px;
        background-image: url(/storage/field/field.svg);
        background-size: cover;
        background-repeat: no-repeat;
        margin-bottom: 30px;
        }
        section {
        display: grid;
        grid-template-rows: repeat(4, 1fr);
        padding: 10px;
        height: 100vh;
        }
        .fotoJugador {
        max-width: 100px;
        max-height: 100px;
        }
        .jugador {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        }
        .card1, .card2, .card3, .card4 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: auto;
        gap: 70px;
        }
        .escudo {
        width: 50px;
        }
        h2 {
        margin-left: 30px;
        margin-top: 15px;
        }
    </style>
    <div class="header">
        <img src="{{ url($equipo->escudo) }}" alt="Escudo" class="escudo">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $equipo->nombreEquipo }}
        </h2>
    </div>
    <div class="divGeneral">
        <section>
            @for ($i = 1; $i <= 4; $i++)
                <div class="card{{ $i }}">
                    @foreach ($jugadores as $jugador)
                        @if ($jugador->equipo_id == $equipo->id && $jugador->posicion_id == $i)
                            <div class="jugador">
                                <img src="{{ url($jugador->foto) }}" alt="Foto" class="fotoJugador">
                                @foreach($posiciones as $posicion)
                                    @if($posicion->id == $jugador->posicion_id)
                                        <img src="{{ url($posicion->imgPosicion) }}" alt="Posicion" class="posicion" class="text-right">
                                    @endif
                                @endforeach
                                <h3 class="text-center">{{ $jugador->nombre }}</h3>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endfor
        </section>
    </div>
</x-app-layout>
