<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Partidos') }}
        </h2>
    </x-slot>

    <div class="text-center text-black">
        <h2 class="text-lg font-bold mb-4">Partidos de la Jornada</h2>
        <ul class="flex justify-center flex-wrap gap-20">
            @foreach ($partidos as $partido)
            <li class="m-4 flex items-center">
                <div class="flex flex-col items-center">
                    <img src="{{ url($partido->local->escudo) }}" alt="{{ $partido->local->nombreEquipo }}" class="max-w-12 h-12 mb-2">
                    <span class="text-black">{{ $partido->local->nombreEquipo }}</span>
                </div>
                <span class="mx-4">vs</span>
                <div class="flex flex-col items-center">
                    <img src="{{ url($partido->visitante->escudo) }}" alt="{{ $partido->visitante->nombreEquipo }}" class="max-w-12 h-12 mb-2">
                    <span class="text-black">{{ $partido->visitante->nombreEquipo }}</span>
                </div>
            </li>
            <br>
            @endforeach
        </ul>
        <form action="{{ route('jugar_partidos') }}" method="POST">
            @csrf
            <button type="submit" class="dark:bg-white dark:text-black dark:hover:border-black dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300 transition duration-300 ease-in-out shadow-xl m-2 font-bold py-2 px-4 rounded">
                JUGAR PARTIDOS
            </button>
        </form>
    </div>
</x-app-layout>
