<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Equipos') }}
       </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <section class="p-5 flex justify-around flex-wrap">
                @if ($equipos)
                    @foreach ($equipos as $equipo)
                        <a href="{{ route('equipos.show', ['id' => $equipo->id]) }}">
                            <div class="w-52 p-1 m-4 rounded-md overflow-hidden shadow-xl transition-transform duration-300 ease-in-out transform hover:scale-105">
                                <img src="{{$equipo->escudo}}" alt="Escudo" class="w-full h-24 object-contain">
                                <div class="p-4">
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
