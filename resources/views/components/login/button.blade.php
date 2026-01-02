@props([
   'title_button',
   'label',
])


<button title="{!! $title_button !!}"
        type="submit" {!! $attributes->merge(['class' => 'px-6 py-2.5 text-center text-sm font-medium rounded-sm bg-blue-900 text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600']) !!}>
    {!! $label !!}
</button>

