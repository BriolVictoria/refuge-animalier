@props([
    'image_path',
    'image_alt',
    'title',
    'content',
])

<article class="flex flex-col p-5 gap-8 bg-green-500 rounded-sm">
    <figure class="flex justify-center">
        <img src="{!! $image_path !!}" alt="{!! $image_alt !!}">
    </figure>
    <div class="flex flex-col gap-4.5 text-center">
        <h3 class="text-lg font-medium">{!! $title !!}</h3>
        <p class="text-sm font-light">{!! $content !!}</p>
    </div>
</article>
