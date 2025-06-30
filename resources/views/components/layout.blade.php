<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- ICONA --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>FinestrArte 3.0</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <x-navbar />

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
