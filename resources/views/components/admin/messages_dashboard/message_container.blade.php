@props([
     'title',
     'messages',
     'route',
     'title_button',
     'label',
     'class',

])


<article class="bg-white rounded-sm shadow-[var(--shadow-xl)] p-6  h-full">
    <h3 class="text-sm font-medium pb-6">{!! $title !!}</h3>

    <x-admin.messages_dashboard.message
        :messages="$messages"
    />

    <x-admin.button.button
        route_name="{!! $route !!}"
        title_button="{!! $title !!}"
        label="{!! $label !!}"
        class="{!! $class !!}"/>


</article>
