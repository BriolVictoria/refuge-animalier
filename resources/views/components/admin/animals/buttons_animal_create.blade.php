@props([
    'buttons'
])

<div class="flex flex-col lg:flex-row gap-6">
    @foreach($buttons as $button)
        <x-admin.button.button
            route_name="{!! $button['route_name'] !!}"
            title_button="{!! $button['title_button'] !!}"
            label="{!! $button['label'] !!}"
            class="{!! $button['class'] !!}"/>
    @endforeach
</div>
