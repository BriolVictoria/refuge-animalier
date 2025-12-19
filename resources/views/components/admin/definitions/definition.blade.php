@php
    $definitions =[
              'adopting' => 'Lorian Flamant',
              'animal_name' => 'Pedro',
              'date' => '24/06/2025',
           ];
@endphp

@props([
    'title',
    'label',
    'title_button',
    'class',
    'adoptings',
])

<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
    <h3 class="text-sm font-medium">{!! $title !!}</h3>

    @foreach($adoptings as $adopting)
        <x-admin.definitions.div
            :adopting="$adopting"
        />
    @endforeach

    <x-admin.button
    label="{!! $label !!}"
    title_button="{!! $title_button !!}"
    class="{!! $class !!}"
    route_name="{!! route('adoptings.index') !!}"
    />

</article>
