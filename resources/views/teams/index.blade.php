<x-layouts.app>
    <section class="space-y-8">
        <header class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium text-blue-600">Gestao Escolar</p>
            <div class="mt-2 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h1 class="text-3xl font-semibold tracking-tight text-slate-900">Times</h1>
                    <p class="mt-1 text-sm text-slate-600">Visualize e acompanhe as equipes cadastradas.</p>
                </div>
                <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-sm font-medium text-slate-700">
                    {{ $teams->count() }} {{ $teams->count() === 1 ? 'time' : 'times' }}
                </span>
            </div>
        </header>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
            @forelse($teams as $team)
                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <h2 class="text-lg font-semibold text-slate-900">{{ $team->name }}</h2>
                    <p class="mt-2 text-sm text-slate-600">{{ $team->email }}</p>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-xs font-medium uppercase tracking-wide text-slate-400">Equipe</span>
                        <span class="rounded-md bg-blue-50 px-2.5 py-1 text-xs font-semibold text-blue-700">Ver turmas em breve</span>
                    </div>
                </article>
            @empty
                <article class="sm:col-span-2 xl:col-span-3 rounded-2xl border border-dashed border-slate-300 bg-white p-10 text-center">
                    <h2 class="text-xl font-semibold text-slate-900">Nenhum time cadastrado</h2>
                    <p class="mt-2 text-sm text-slate-600">Assim que voce criar equipes, elas aparecerao aqui.</p>
                    <button type="button" class="mt-6 inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                        Novo time (em breve)
                    </button>
                </article>
            @endforelse
        </div>
    </section>
</x-layouts.app>
