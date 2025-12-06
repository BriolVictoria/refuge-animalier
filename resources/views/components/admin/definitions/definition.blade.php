@php
    $definitions =[
              'adopting' => 'Lorian Flamant',
              'animal_name' => 'Pedro',
              'date' => '24/06/2025',
           ];
@endphp

@props([
    'title',
])

<article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
    <h3 class="text-sm font-medium">{!! $title !!}</h3>

    @foreach($definitions as $definition)
        <x-admin.definitions.div
            :definitions="$definitions"
        />
    @endforeach

</article>
