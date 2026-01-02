<!doctype html>
<html lang="{!! App::getLocale(); !!}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Briol Victoria">
    <meta name="description" content="{{__('public/header_html.meta.description')}}">
    <meta name="keywords" content="{{__('public/header_html.meta.keywords')}}">
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
