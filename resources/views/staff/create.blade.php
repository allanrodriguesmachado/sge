<x-layouts.app>
    <section class="mx-auto max-w-3xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 dark:border-slate-700 dark:bg-slate-900">
        <div class="mb-6 flex items-center justify-between border-b border-slate-200 pb-3 dark:border-slate-700">
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">Cadastrar Funcionario</h1>

            <a href="{{ route('staff.index') }}" class="flex items-center gap-1 text-sm font-semibold text-slate-600 transition hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 rounded-md border border-green-300 bg-green-50 p-4 text-green-700 dark:border-green-900 dark:bg-green-950/40 dark:text-green-300">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('staff.store') }}" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-slate-700 dark:text-slate-200">Nome</label>
                <input type="text" name="name" id="name" placeholder="Digite o nome"
                       class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400">
                <x-message.error field="name"/>
            </div>

            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-slate-700 dark:text-slate-200">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite o e-mail"
                       class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400">
                <x-message.error field="email"/>
            </div>

            <div>
                <label for="phone" class="mb-1 block text-sm font-medium text-slate-700 dark:text-slate-200">Telefone</label>
                <input type="text" name="phone" id="phone" placeholder="Digite o telefone"
                       class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400">
                <x-message.error field="phone"/>
            </div>

            <div>
                <label for="work_shift" class="mb-1 block text-sm font-medium text-slate-700 dark:text-slate-200">Turno</label>
                <select name="work_shift" id="work_shift"
                        class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100">
                    <option class="default">Selecione um periodo</option>
                    <option value="morning">Manha</option>
                    <option value="afternoon">Tarde</option>
                    <option value="full">Integral</option>
                </select>
                <x-message.error field="work_shift"/>
            </div>

            <div class="pt-2">
                <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-bold text-white transition hover:bg-indigo-700">
                    Cadastrar
                </button>
            </div>
        </form>
    </section>
</x-layouts.app>
