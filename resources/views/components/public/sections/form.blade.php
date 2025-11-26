@props([
    'title',
    'sub_title',
    'content',
])


<section {!! $attributes->merge(['class' => 'flex flex-col gap-1 gap-6']) !!} >
<div class="flex flex-col gap-3">
    <h2 class="text-lg font-medium">{!! $title !!}</h2>
    <p class="text-xs font-light text-red-500">{!! $sub_title !!}</p>
</div>
    {!! $content !!}
</section>
