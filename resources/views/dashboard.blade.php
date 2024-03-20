<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Panel de Usuario ') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-center justify-center w-full h-full">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-200 overflow-hidden sm:rounded-lg border border-solid border-black shadow-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url('/dashboard/jugadores/create')}}"><button class="bg-white text-gray-900 dark:bg-white dark:text-black font-bold py-2 px-4 rounded border border-solid border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300 hover:border-gray-400 dark:hover:border-black transition duration-300 ease-in-out shadow-xl m-2">CREAR JUGADOR</button></a>
                    <a href="{{url('/dashboard/equipos/create')}}"><button class="bg-white text-gray-900 dark:bg-white dark:text-black font-bold py-2 px-4 rounded border border-solid border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300 hover:border-gray-400 dark:hover:border-black transition duration-300 ease-in-out shadow-xl m-2">CREAR EQUIPO</button></a>
                </div>
            </div> 
        </div> 
    </div>
</x-app-layout>
