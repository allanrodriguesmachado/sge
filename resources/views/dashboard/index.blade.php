<x-layouts.app>
    <section class="space-y-6">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100">Dashboard</h1>
                <p class="text-sm text-slate-600 dark:text-slate-300">Visao geral da equipe escolar.</p>
            </div>

            <a href="{{ route('staff.create') }}" class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                + Novo funcionario
            </a>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-slate-900">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Total</p>
                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-slate-100">{{ $stats['total'] }}</p>
            </article>

            <article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-slate-900">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Manha</p>
                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-slate-100">{{ $stats['morning'] }}</p>
            </article>

            <article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-slate-900">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Tarde</p>
                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-slate-100">{{ $stats['afternoon'] }}</p>
            </article>

            <article class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-700 dark:bg-slate-900">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Integral</p>
                <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-slate-100">{{ $stats['full'] }}</p>
            </article>
        </div>

        <article class="rounded-xl border border-slate-200 bg-white shadow-sm dark:border-slate-700 dark:bg-slate-900">
            <div class="border-b border-slate-200 px-4 py-3 dark:border-slate-700">
                <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">Ultimos cadastros</h2>
            </div>

            @if($latestStaff->isEmpty())
                <p class="p-4 text-sm text-slate-500 dark:text-slate-400">Sem funcionarios cadastrados no momento.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-800/70">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-300">Nome</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-300">E-mail</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-300">Turno</th>
                            <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-300">Acao</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                        @foreach($latestStaff as $staff)
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60">
                                <td class="px-4 py-3 font-medium text-slate-800 dark:text-slate-100">{{ $staff->name }}</td>
                                <td class="px-4 py-3 text-slate-600 dark:text-slate-300">{{ $staff->email }}</td>
                                <td class="px-4 py-3 text-slate-600 dark:text-slate-300">{{ ucfirst($staff->work_shift) }}</td>
                                <td class="px-4 py-3 text-right">
                                    <a href="{{ route('staff.edit', $staff) }}" class="font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </article>
    </section>
</x-layouts.app>

