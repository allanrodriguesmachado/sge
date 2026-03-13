<x-layouts.app>
    <section class="mx-auto max-w-5xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 dark:border-slate-700 dark:bg-slate-900">
        <div class="mb-6 flex items-center justify-between border-b border-slate-200 pb-4 dark:border-slate-700">
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Equipe Escolar</h1>

            <a href="{{ route('class.create') }}"
               class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                + Adicionar Turma
            </a>
        </div>

        @if($classes->isEmpty())
            <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 py-12 text-center dark:border-slate-700 dark:bg-slate-800/40">
                <p class="text-slate-500 dark:text-slate-300">Nenhuma turma cadastrada.</p>
            </div>
        @else
            <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-700">
                <table class="min-w-full bg-white dark:bg-slate-900">
                    <thead class="bg-slate-50 dark:bg-slate-800/70">
                    <tr>
                        <th class="w-16 border-b border-slate-200 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600 dark:border-slate-700 dark:text-slate-300">#</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600 dark:border-slate-700 dark:text-slate-300">Nome</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-right text-xs font-semibold uppercase tracking-wider text-slate-600 dark:border-slate-700 dark:text-slate-300">Acoes</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    @foreach($classes as $class)
                        <tr class="transition hover:bg-slate-50 dark:hover:bg-slate-800/60">
                            <td class="px-4 py-3 text-sm text-slate-500 dark:text-slate-400">{{ $class->id }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-slate-900 dark:text-slate-100">{{ $class->name }}</td>
                            <td class="space-x-2 px-4 py-3 text-right text-sm">
                                <a href="{{ route('class.edit', $class) }}" class="font-medium text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">Editar</a>
                                <form action="{{ route('class.destroy', $class) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        @endif
    </section>
</x-layouts.app>
