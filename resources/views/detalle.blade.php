<x-app-layout>
    <style>
        .header {
            display: flex;
            width: 100%;
            flex-direction: row;
            justify-content: center;
            margin-bottom: 10px;
            margin-top: 10px;
        }
       .divGeneral {
        width: 50%;
        max-height: 100vh;
        margin-left: 400px;
        background: url(/storage/field/field.svg);
        background-size: contain;
        background-repeat: no-repeat;
       }
       section {
       display: flex;
       flex-direction: column;
       flex-wrap: wrap;
       justify-content:space-around;
       max-height: 100vh;
       padding-bottom: 30px;
       }
       .fotoJugador {
       max-width: 100px;
       }
       .card {
        width: 150px;
        height: 200px;
       }
       .escudo {
        width: 70px;
       }
       h2 {
        margin-left: 50px;
        margin-top: 20px;
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
             @foreach ($jugadores as $jugador)
                @if ($jugador->equipo_id == $equipo->id)
                    <div class="card">
                        <div>
                            <img src="{{ url($jugador->foto) }}" alt="Foto" class="fotoJugador">
                            @foreach($posiciones as $posicion)
                                @if($posicion->id == $jugador->posicion_id)
                                    <img src="{{ url($posicion->imgPosicion) }}" alt="Posicion" class="posicion" class="text-right">
                                @endif
                            @endforeach
                        </div>
                        <div class="overflow-hidden shadow-sm sm:rounded-lg">
                            <p class="text-center">{{ $jugador->nombre }}</p>
                        </div>
                    </div>
                 @endif
             @endforeach
          </section>
    </div>
 </x-app-layout>