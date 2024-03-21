<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            {{ __('Clasificacion') }}
        </h2>
    </x-slot>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex justify-center">
        <div class="w-full sm:w-11/12 lg:w-10/12">
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border border-gray-400 shadow-xl bg-white rounded-lg mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Escudo</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Equipo</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">V</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">E</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">D</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">GF</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">GC</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Puntos</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($clasificaciones as $clasificacion)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ $clasificacion->equipo->escudo }}" alt="Escudo" class="h-10 max-w-10">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->equipo->nombreEquipo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->victorias }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->empates }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->derrotas }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->golesFavor }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->golesContra }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $clasificacion->puntos }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
