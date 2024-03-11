<x-app-layout>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
        section {
         padding: 20px;
         display: flex;
         justify-content: space-around;
         flex-wrap: wrap;
         }
        .card {
         width: 200px;
         padding: 5px;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         margin: 15px;
         overflow: hidden;
         transition: transform 0.3s ease;
         }
         .card:hover {
         transform: scale(1.03);
         }
         .card img {
         width: 100%;
         object-fit: contain;
         }
         .card-content {
         padding: 15px;
         }
    </style>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Equipos') }}
       </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <section>
                @if ($equipos)
                    @foreach ($equipos as $equipo)
                        <a href="{{ route('equipos.show', ['id' => $equipo->id]) }}">
                            <div class="card">
                                <img src="{{$equipo->escudo}}" alt="Escudo">
                                <div class="card-content">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2 capitalize text-center">{{ strtoupper($equipo->nombreEquipo) }}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </section>
          </div>
       </div>
    </div>
 </x-app-layout>
