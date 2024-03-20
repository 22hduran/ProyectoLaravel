<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Crear jugador') }}
        </h2>
    </x-slot>

    <div class="w-20 ml-96">
        <div class="mx-auto sm:px-6 lg:px-8">
                <div class="text-gray-900 dark:text-gray-500 ml-36">
                    <div class="mx-auto">
                        <form action="{{route('equipos.store')}}" class="w-96 dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-8 border border-black"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4 p-2">
                                <label class="block text-white text-sm font-bold mb-2" for="nombreEquipo">
                                    Nombre del equipo
                                </label>
                                <input
                                    class="shadow appearance-none border rounded py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline"
                                    id="nombreEquipo" type="text" placeholder="Nombre del equipo" name="nombreEquipo">
                            </div>
                            <div class="mb-4 p-2">
                                <label class="block text-white text-sm font-bold mb-2" for="escudo">
                                    Escudo del equipo
                                </label>
                                <input type="file" name="escudo">
                            </div>
                            <div class="flex items-center justify-between p-2">
                                <button class="dark:bg-blue-400 dark:hover:bg-blue-500 dark:text-black border border-solid border-black font-bold py-2 px-4 rounded" type="submit">
                                    CREAR EQUIPO
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
