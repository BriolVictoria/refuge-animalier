@props([
    'buttons'
])

<div class="flex flex-col lg:flex-row gap-6 mx-8">
    @foreach($buttons as $button)
    <x-admin.button.button
        route_name="{!! $button['route'] !!}"
        title_button="{!! $button['title_bouton'] !!}"
        label="{!! $button['label'] !!}"
        class="{!! $button['class'] !!}"/>
    @endforeach
</div>
