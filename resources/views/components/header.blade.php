<header
    class="fixed inset-x-0 top-0 z-30 border-b border-slate-200/70 bg-white/90 shadow-sm backdrop-blur dark:border-slate-800/80 dark:bg-slate-900/90">
    <nav class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-3">
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white">SGE</span>
            <div class="leading-tight">
                <p class="text-sm font-semibold text-slate-900 dark:text-slate-100">Portal Escolar</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Sistema de Gestao Escolar</p>
            </div>
        </a>

        <div class="hidden items-center gap-2 md:flex">
            <a href="{{ route('dashboard.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard.index') || request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-500/20 dark:text-indigo-300' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-slate-100' }}">
                Dashboard
            </a>
            <a href="{{ route('staff.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('staff.*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-500/20 dark:text-indigo-300' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-slate-100' }}">
                Equipe
            </a>
        </div>

        <div class="flex items-center gap-2">
            <button id="theme-toggle" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-slate-600 transition hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800"
                    aria-label="Alternar tema">
                <svg id="theme-toggle-dark-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            <button data-collapse-toggle="main-navbar" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 md:hidden dark:text-slate-300 dark:hover:bg-slate-800"
                    aria-controls="main-navbar" aria-expanded="false">
                <span class="sr-only">Abrir menu</span>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <div id="main-navbar" class="hidden border-t border-slate-200 bg-white px-4 py-3 md:hidden dark:border-slate-800 dark:bg-slate-900">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-2">
            <a href="{{ route('dashboard.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard.index') || request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-500/20 dark:text-indigo-300' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-slate-100' }}">
                Dashboard
            </a>
            <a href="{{ route('staff.index') }}"
               class="rounded-md px-3 py-2 text-sm font-medium transition {{ request()->routeIs('staff.*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-500/20 dark:text-indigo-300' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-slate-100' }}">
                Equipe
            </a>
        </div>
    </div>
</header>
