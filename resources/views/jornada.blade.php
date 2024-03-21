<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
          {{ __('Jornada') }}
       </h2>
    </x-slot>
<div class="text-center">
    <h2 class="text-lg font-bold mb-4">Comenzar una jornada</h2>
    <form action="{{ route('comenzar-jornada') }}" method="POST">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Comenzar jornada
        </button>
    </form>
</div>

</x-app-layout>