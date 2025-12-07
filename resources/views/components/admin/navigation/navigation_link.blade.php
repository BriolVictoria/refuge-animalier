@props([
    'list_class',
    'links_class',
    'icon',
    'icon_alt',
    'label',
    'route_name',
    'title'
])

<li class="{!! $list_class !!}">
    <a class="{!! $links_class !!}" wire:navigate href="{!! $route_name !!}" title="{!! $title !!}">
        <img class="pr-2.5" src="{!! $icon !!}" alt="{!! $icon_alt !!}">
        {!! $label !!}
    </a>
</li>
