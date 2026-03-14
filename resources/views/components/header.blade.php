<header
    class="fixed inset-x-0 top-0 z-30 border-b border-slate-200/70 bg-white/90 shadow-sm backdrop-blur">
    <nav class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-3">
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white">SGE</span>
            <div class="leading-tight">
                <p class="text-sm font-semibold text-slate-900">Portal Escolar</p>
                <p class="text-xs text-slate-500">Sistema de Gestao Escolar</p>
            </div>
        </a>

        <div class="hidden items-center gap-2 md:flex">
            <a href="{{ route('dashboard.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard.index') || request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Dashboard
            </a>
            <a href="{{ route('staff.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('staff.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Equipe
            </a>
            <a href="{{ route('class.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('class.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Turma
            </a>
        </div>

        <div class="flex items-center gap-2">
            <button data-collapse-toggle="main-navbar" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 md:hidden"
                    aria-controls="main-navbar" aria-expanded="false">
                <span class="sr-only">Abrir menu</span>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <div id="main-navbar" class="hidden border-t border-slate-200 bg-white px-4 py-3 md:hidden">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-2">
            <a href="{{ route('dashboard.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard.index') || request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Dashboard
            </a>
            <a href="{{ route('staff.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('staff.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Equipe
            </a>
            <a href="{{ route('class.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('class.*') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Turma
            </a>
        </div>
    </div>
</header>
