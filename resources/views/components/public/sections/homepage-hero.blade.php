@props([
    'image_path',
    'image_alt',
    'sub_title',
    'title',
    'content',
    'buttons',
])

<section class="bg-green-50 flex flex-col items-center gap-6 md:flex-row-reverse">
    <figure>
        <img src="{!! $image_path !!}"
             alt="{!! $image_alt !!}">
    </figure>
    <div>
        <span class="text-sm font-normal">{!! $sub_title !!}</span>
        <h2 class="text-xl font-normal text-green-900 font-[PatrickHand]">
            {!! $title !!}
        </h2>
        <p class="text-sm font-light pt-3 pb-12 ">
            {!! $content !!}
        </p>

        <div class="flex flex-col gap-6 md:flex-row">
            @foreach($buttons as $button)
                <x-public.buttons.button
                    :route_name="$button['route_name']"
                    :title="$button['title']"
                    :label="$button['label']"
                    :class="$button['class']"/>

            @endforeach
        </div>
    </div>
</section>
