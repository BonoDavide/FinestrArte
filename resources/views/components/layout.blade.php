<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>FinestrArte</title>
</head>
<body>
    <x-navbar/>

    <main class="vh-100">
        {{$slot}}
    </main>
    
    <x-footer/>
</body>
</html>