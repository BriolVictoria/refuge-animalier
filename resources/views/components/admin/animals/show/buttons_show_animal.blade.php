@props([
    'buttons'
])

@foreach($buttons as $button)

    <x-admin.button.button
        route_name="{!! $button['route_name'] !!}"
        label="{!! $button['label'] !!}"
        title_button="{!! $button['title_button'] !!}"
        class="{!! $button['class'] !!}"
    />

@endforeach
