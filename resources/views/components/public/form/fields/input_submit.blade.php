@props([
    'label',
])

<input {!! $attributes->merge(['class'=>'px-6 py-2.5 text-center text-sm font-medium rounded-sm bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105']) !!}
    type="submit" value="{!! $label !!}">
