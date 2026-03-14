<x-layouts.app>
    <section class="mx-auto max-w-3xl rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <div class="mb-6 flex items-center justify-between border-b border-slate-200 pb-3">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Cadastrar turma</h1>
                <p class="mt-1 text-sm text-slate-500">Informe o nome, pelo menos um limite por período e os funcionários responsáveis.</p>
            </div>

            <a href="{{ route('class.index') }}" class="flex items-center gap-1 text-sm font-semibold text-slate-600 transition hover:text-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 rounded-md border border-green-300 bg-green-50 p-4 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('class.store') }}" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-slate-700">Nome da turma</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Ex.: Infantil A"
                       class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <x-message.error field="name"/>
            </div>

            <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                <div class="mb-4">
                    <h2 class="text-sm font-semibold text-slate-800">Limite por período</h2>
                    <p class="text-sm text-slate-500">Preencha pelo menos um dos campos abaixo.</p>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <div>
                        <label for="morning" class="mb-1 block text-sm font-medium text-slate-700">Manhã</label>
                        <input type="number" min="0" name="morning" id="morning" value="{{ old('morning') }}" placeholder="0"
                               class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-message.error field="morning"/>
                    </div>

                    <div>
                        <label for="afternoon" class="mb-1 block text-sm font-medium text-slate-700">Tarde</label>
                        <input type="number" min="0" name="afternoon" id="afternoon" value="{{ old('afternoon') }}" placeholder="0"
                               class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-message.error field="afternoon"/>
                    </div>

                    <div>
                        <label for="full_time" class="mb-1 block text-sm font-medium text-slate-700">Integral</label>
                        <input type="number" min="0" name="full_time" id="full_time" value="{{ old('full_time') }}" placeholder="0"
                               class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <x-message.error field="full_time"/>
                    </div>
                </div>

                <div class="mt-3">
                    <x-message.error field="periods"/>
                </div>
            </div>

            <div>
                <label for="staff_ids" class="mb-1 block text-sm font-medium text-slate-700">Funcionários responsáveis</label>
                <select name="staff_ids[]" id="staff_ids" multiple
                        class="w-full rounded-lg border border-slate-300 bg-white p-2.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @foreach($staffs as $staff)
                        <option value="{{ $staff->id }}" {{ in_array($staff->id, old('staff_ids', [])) ? 'selected' : '' }}>
                            {{ $staff->name }}
                        </option>
                    @endforeach
                </select>
                <p class="mt-1 text-sm text-slate-500">Segure Ctrl ou Cmd para selecionar mais de um funcionário.</p>
                <x-message.error field="staff_ids"/>
            </div>

            <div class="pt-2">
                <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-bold text-white transition hover:bg-indigo-700">
                    Cadastrar turma
                </button>
            </div>
        </form>
    </section>
</x-layouts.app>
