@props([
   'route_name',
   'title',
   'label',
])

<a {!! $attributes->merge(['class' => 'px-6 py-2.5 text-center text-sm font-medium rounded-sm']) !!}
   href="{!! $route_name !!}" title="{!! $title !!}">{!! $label !!}</a>
