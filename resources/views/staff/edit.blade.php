<x-layouts.app>
    <section class="mx-auto max-w-3xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 dark:border-slate-700 dark:bg-slate-900">
        <div class="mb-6 flex items-center justify-between border-b border-slate-200 pb-3 dark:border-slate-700">
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Editar Funcionario</h1>
            <a href="{{ route('staff.index') }}" class="text-sm font-semibold text-slate-600 transition hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400">Voltar</a>
        </div>

        <form action="{{ route('staff.update', $staff) }}" method="post" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-slate-700 dark:text-slate-200">Nome</label>
                <input type="text" name="name" id="name" value="{{ $staff->name }}" placeholder="Digite o nome"
                       class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400">
                <x-message.error field="name"/>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-bold text-white transition hover:bg-indigo-700">
                    Salvar
                </button>
            </div>
        </form>
    </section>
</x-layouts.app>
