@props([
    'title',
    'content',
])

<div class="flex flex-col gap-2">
    <span class="text-lg font-bold">{!! $title !!}</span>
    <p class="text-sm font-light">{!! $content !!}</p>
</div><?php
