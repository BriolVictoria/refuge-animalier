@props([
    'section_title',
    'image_path',
    'image_alt',
    'definitions',
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',
])

<article class="bg-white rounded-sm">
    <h3 class="sr-only">{!! $section_title !!}</h3>
    <img class="rounded-t-sm rounded-tr-sm max-h-[11.5625rem] object-cover" width="500" height="400" src="{!! $image_path !!}" alt="{!! $image_alt !!}">
    <div class="flex flex-col gap-3.5 p-3.5">
        <dl class="grid grid-cols-2 gap-y-4 gap-x-10.5">
            @foreach($definitions as $definition)
                <div class="flex">
                    <dt class="text-xs font-normal pr-2.5">{!! $definition['title'] !!}</dt>
                    <dd class="text-xs font-bold">{!! $definition['content'] !!}</dd>
                </div>
            @endforeach
        </dl>

        <x-public.buttons.button
            :route_name="$btn_url"
            :title="$btn_title"
            :label="$btn_label"
            :class="$btn_class"/>
    </div>


</article>
