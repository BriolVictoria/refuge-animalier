@props([
    'definitions'
])

<div class="flex flex-col gap-2 md:col-span-2">
    @foreach($definitions as $definition)

        <div class="flex items-baseline">
            <dt class="text-sm font-medium pr-2.5">{!! $definition['title'] !!}&nbsp;:</dt>
            <dd class="text-xs font-light">{!! $definition['content'] !!}</dd>
        </div>

    @endforeach
</div>
