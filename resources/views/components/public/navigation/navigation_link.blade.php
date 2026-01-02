@props([
    'list_class',
    'links_class',
    'label',
    'route_name',
    'title'
])

<li class="{!! $list_class !!}"><a class="{!! $links_class !!}" href="{!! $route_name !!}" title="{!! $title !!}">{!! $label !!}</a></li>
