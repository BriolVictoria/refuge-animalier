<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body x-data="{open : false}"
          x-on:open-modal.window="open = true"
          x-on:close-modal.window="open = false"
          :class="open ? 'overflow-hidden' : ''"
        class="max-w-[125rem] m-auto lg:flex lg:flex-row relative">
        <livewire:admin::partials.heading />
        {{ $slot }}

    </body>
</html>
