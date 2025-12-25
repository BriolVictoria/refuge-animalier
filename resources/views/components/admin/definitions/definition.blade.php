@props([
    'title',
    'label',
    'title_button',
    'class',
])

<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
    <h3 class="text-sm font-medium">{!! $title !!}</h3>

    <x-admin.definitions.div/>

    <x-admin.button
        label="{!! $label !!}"
        title_button="{!! $title_button !!}"
        class="{!! $class !!}"
        route_name="{!! route('adoptings.index') !!}"
    />

</article>
