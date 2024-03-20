<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
        background-color: #111827;
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
        .card1, .card2, .card3, .card4 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: auto;
        gap: 70px;
        }
    </style>
    <div class="flex w-full flex-row justify-center mb-4 mt-3">
        <img src="{{ url($equipo->escudo) }}" alt="Escudo" class="w-12">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mt-4 ml-7">
            {{ $equipo->nombreEquipo }}
        </h2>
    </div>
    <div class="divGeneral">
        <section class="grid grid-rows-4 p-3 h-screen">
            @for ($i = 1; $i <= 4; $i++)
                <div class="card{{ $i }}">
                    @foreach ($jugadores as $jugador)
                        @if ($jugador->equipo_id == $equipo->id && $jugador->posicion_id == $i)
                            <div class="flex items-center flex-col justify-center">
                                <img src="{{ url($jugador->foto) }}" alt="Foto" class="max-w-24 max-h-24">
                                @foreach($posiciones as $posicion)
                                    @if($posicion->id == $jugador->posicion_id)
                                        <img src="{{ url($posicion->imgPosicion) }}" alt="Posicion" class="posicion" class="text-right">
                                    @endif
                                @endforeach
                                <h3 class="text-center">{{ $jugador->nombre }}</h3>
                                @can('update', $jugador)
                                <a href="{{ route('jugadores.edit', ['jugadore' => $jugador->id]) }}" class="bg-white hover:bg-gray-300 text-white font-bold rounded -ml-12">✏️</a>
                                @endcan
                                @can('delete', $jugador)
                                <form action="{{ route('jugadores.destroy', ['jugadore' => $jugador->id]) }}" method="POST" class="-mt-6 ml-12">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold rounded">🗑️</button>
                                </form>
                                @endcan
                            </div>
                        @endif
                    @endforeach
                </div>
            @endfor
        </section>
    </div>
</x-app-layout>
