<x-layouts.app>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Teams</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($teams as $team)
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $team->name }}</h2>
                    <p class="text-gray-600 mb-4">{{ $team->email }}</p>
                    <a href="" class="text-blue-500 hover:underline">Ver Turmas</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
