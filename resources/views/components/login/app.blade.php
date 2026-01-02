<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Briol Victoria">
    <meta name="description" content="Site web pour un refuge animalier">
    <meta name="keywords" content="Refuge&nbsp;, Animaux&nbsp;, Adoption">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $title !!} - Les pattes heureuses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen bg-gray-100 px-4flex justify-center items-center max-w-[125rem] bg-gradient-to-br from-white via-white to-blue-300 h-full">

<header>
    <h1 class="sr-only">{!! $title !!} - Les pattes heureuses</h1>
</header>


{!! $slot !!}

<footer>

    <h2 class="sr-only">Footer</h2>

</footer>
</body>
</html>
