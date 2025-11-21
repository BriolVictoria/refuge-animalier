<!doctype html>
<html lang="{!! App::getLocale(); !!}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Briol Victoria">
    <meta name="description" content="Site web pour un refuge animalier">
    <meta name="keywords" content="Refuge&nbsp;, Animaux&nbsp;, Adoption">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $title !!} - Les pattes heureuses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="max-w-[125rem] m-auto">

{{--Header component--}}
<x-public.partials.header/>

{!! $slot !!}

{{--Footer component--}}
<x-public.partials.footer/>

</body>
</html>
