<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portal Escolar') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen overflow-x-hidden bg-slate-50 text-slate-800 antialiased transition-colors duration-300">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -top-40 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-indigo-200/40 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-sky-200/30 blur-3xl"></div>
        <div class="absolute left-0 top-1/3 h-72 w-72 rounded-full bg-violet-200/20 blur-3xl"></div>
    </div>

    <x-header />

    <div class="relative flex min-h-screen flex-col">
        <main class="mx-auto w-full max-w-7xl flex-1 px-4 pb-12 pt-24 sm:px-6 sm:pt-28 lg:px-8">
            {{ $slot }}

        </main>

        <footer class="border-t border-slate-200/70 bg-white/70 py-4 backdrop-blur">
            <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 text-xs font-bold text-slate-500 sm:px-6 lg:px-8">
                <span>Sistema de Gestao Escolar</span>
                <span>{{ date('Y') }}</span>
            </div>
        </footer>
    </div>
</body>
</html>
