@props([
    'title',
    'sub_title',
    'content',
])


<section class="form flex flex-col gap-6 md:flex-row-reverse pt-[6rem]">
<div class="flex flex-col gap-3">
    <h2 class="text-lg font-medium">{!! $title !!}</h2>
    <p class="text-xs font-light text-red-500">{!! $sub_title !!}</p>
</div>
    {!! $content !!}
</section>
