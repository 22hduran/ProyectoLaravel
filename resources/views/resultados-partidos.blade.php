<x-app-layout>
    <x-slot name="header">
    <script src="https://cdn.tailwindcss.com"></script>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Resultados de Partidos') }}
        </h2>
    </x-slot>

    <div class="container mx-auto flex flex-col items-center gap-10">
        <h3 class="text-lg font-bold mb-4 text-black">Resultados de la Jornada</h3>
        <ul class="text-black">
            @foreach ($partidos as $partido)
                <li class="flex justify-center items-center mt-4">
                    <img src="{{ $partido->local->escudo }}" alt="{{ $partido->local->nombreEquipo }}" class="h-8 w-8 mr-2">
                    <span>{{ $partido->local->nombreEquipo }}</span>
                    <span class="mx-2">{{ $partido->goles_local }} - {{ $partido->goles_visitante }}</span>
                    <span>{{ $partido->visitante->nombreEquipo }}</span>
                    <img src="{{ $partido->visitante->escudo }}" alt="{{ $partido->visitante->nombreEquipo }}" class="h-8 w-8 ml-2">
                </li>
            @endforeach
        </ul>
        <form action="{{ route('comenzar-jornada') }}" method="POST" class="mt-8">
            @csrf
            <button type="submit" class="dark:bg-white dark:text-black dark:hover:border-black dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300 transition duration-300 ease-in-out shadow-xl m-2 font-bold py-2 px-4 rounded">
                SIGUIENTE JORNADA
            </button>
        </form>
    </div>
</x-app-layout>
