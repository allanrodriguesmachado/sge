<x-layouts.app>
    <section class="mx-auto max-w-5xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <div class="mb-6 flex items-center justify-between border-b border-slate-200 pb-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Turmas</h1>
                <p class="mt-1 text-sm text-slate-500">Acompanhe os limites cadastrados para cada período.</p>
            </div>

            <a href="{{ route('class.create') }}"
               class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                + Adicionar turma
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 rounded-md border border-green-300 bg-green-50 p-4 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if($classes->isEmpty())
            <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 py-12 text-center">
                <p class="text-slate-500">Nenhuma turma cadastrada.</p>
            </div>
        @else
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-slate-50">
                    <tr>
                        <th class="w-16 border-b border-slate-200 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">#</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">Nome</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-center text-xs font-semibold uppercase tracking-wider text-slate-600">Manhã</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-center text-xs font-semibold uppercase tracking-wider text-slate-600">Tarde</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-center text-xs font-semibold uppercase tracking-wider text-slate-600">Integral</th>
                        <th class="border-b border-slate-200 px-4 py-3 text-right text-xs font-semibold uppercase tracking-wider text-slate-600">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                    @foreach($classes as $class)
                        <tr class="transition hover:bg-slate-50">
                            <td class="px-4 py-3 text-sm text-slate-500">{{ $class->id }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-slate-900">{{ $class->name }}</td>
                            <td class="px-4 py-3 text-center text-sm text-slate-700">{{ $class->morning }}</td>
                            <td class="px-4 py-3 text-center text-sm text-slate-700">{{ $class->afternoon }}</td>
                            <td class="px-4 py-3 text-center text-sm text-slate-700">{{ $class->full_time }}</td>
                            <td class="space-x-2 px-4 py-3 text-right text-sm">
                                <a href="{{ route('class.edit', $class) }}" class="font-medium text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('class.destroy', $class) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 hover:text-red-900">Excluir</button>
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
