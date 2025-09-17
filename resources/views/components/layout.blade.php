<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ICONA --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    {{-- PRECONNECT FONTS (micro-performance) --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    {{-- GOOGLE FONTS --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Playfair+Display:wght@500;700&display=swap"
        rel="stylesheet">

    {{-- TITLE dinamico + fallback --}}
    <title>
        @hasSection('title')
            @yield('title')
        @else
            FinestrArte 3.0 — Infissi e Serramenti su misura a Roma
        @endif
    </title>

    {{-- META DESCRIPTION dinamica + fallback --}}
    @hasSection('meta_description')
        <meta name="description" content="@yield('meta_description')">
    @else
        <meta name="description"
            content="Infissi su misura a Roma: finestre, persiane, pergole. Sopralluogo, fornitura e posa professionale.">
    @endif

    {{-- CANONICAL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ROBOTS (sovrascrivibile per pagine specifiche) --}}
    @stack('robots')
    <meta name="robots" content="index,follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="it_IT">
    <meta property="og:site_name" content="FinestrArte 3.0">
    <meta property="og:title" content="@yield('og_title', trim(View::hasSection('title') ? preg_replace('/\s+/', ' ', View::yieldContent('title')) : 'FinestrArte 3.0 — Infissi su misura'))">
    <meta property="og:description" content="@yield('og_description', View::hasSection('meta_description') ? View::yieldContent('meta_description') : 'Infissi su misura a Roma: finestre, persiane, pergole.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('img/og-default.jpg'))">

    {{-- TWITTER CARD (compat) --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', trim(View::hasSection('title') ? preg_replace('/\s+/', ' ', View::yieldContent('title')) : 'FinestrArte 3.0 — Infissi su misura'))">
    <meta name="twitter:description" content="@yield('og_description', View::hasSection('meta_description') ? View::yieldContent('meta_description') : 'Infissi su misura a Roma: finestre, persiane, pergole.')">
    <meta name="twitter:image" content="@yield('og_image', asset('img/og-default.jpg'))">

    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- LIVEWIRE --}}
    @livewireStyles

    {{-- SCHEMA.ORG / JSON-LD --}}
    @stack('structured-data')
    @stack('head-extra')
</head>

<body class="d-flex flex-column min-vh-100 my-0 py-0">
    <x-navbar class="my-0 py-0" />

    <main class="flex-grow-1 my-0 py-0">
        {{ $slot }}
    </main>

    <x-footer />

    {{-- LIVEWIRE --}}
    @livewireScripts
</body>

</html>
