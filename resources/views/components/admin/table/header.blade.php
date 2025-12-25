@props([
    'title_sronly',
    'route_name',
    'title_button',
    'label',
    'class',
    'search_placeholder',
    /*'wire',*/
])

<h2 class="sr-only">{!! $title_sronly !!}</h2>
<div class="flex flex-col md:flex-row md:justify-between md:items-baseline gap-4">
    <input type="search" wire:model="search" name="search" id="search" placeholder="{!! $search_placeholder !!}" class="mb-3 md:w-1/3 md:mb-7 text-xs text-blue-900 font-medium py-3.5 px-2.5 self-start border border-blue-400 rounded-sm">
    <div class="flex gap-2 mb-7">
        <x-admin.button.button
            route_name="{!! $route_name !!}"
            title_button="{!! $title_button !!}"
            label="{!! $label !!}"
            class="{!! $class !!}"/>
        <x-admin.button.button
            route_name="#"
            title_button="Filtrer"
            label="Filtrer"
            class="border-blue-900 border-[0.09375rem] h-13 text-blue-900 transition-transform duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600"/>
    </div>

</div>
