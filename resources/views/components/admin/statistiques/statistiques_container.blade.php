@props([
     'title',
     'statistiques',
     'route',
     'title',
     'label',
     'class',

])


<article class="bg-white rounded-sm shadow-[var(--shadow-xl)] p-6  h-full">
    <h3 class="text-sm font-medium pb-6">{!! $title !!}</h3>

    <x-admin.statistiques.statistique
        :statistiques="$statistiques"
    />

    <x-admin.button.button
        route_name="{!! $route !!}"
        title="{!! $title !!}"
        label="{!! $label !!}"
        class="{!! $class !!}"/>

</article>
