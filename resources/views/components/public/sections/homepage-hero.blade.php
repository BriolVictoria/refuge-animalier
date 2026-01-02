

@props([
    'image_path',
    'image_alt',
    'sub_title',
    'title',
    'content',
    'buttons',
])

<section class="bg-green-50 flex flex-col items-center gap-6 2xl:grid 2xl:grid-cols-12 min-[1850px]:justify-between">
    <figure class="2xl:col-start-8 2xl:col-end-13 2xl:flex 2xl:justify-center">
        <img class="2xl:w-[34rem]" width="50" height="50" src="{!! $image_path !!}"
             alt="{!! $image_alt !!}">
    </figure>
    <div class="flex flex-col 2xl:col-start-1 2xl:col-end-7 2xl:row-start-1">
        <span class="text-sm font-normal 2xl:text-xl">{!! $sub_title !!}</span>
        <h2 class="text-xl font-normal text-green-900 font-[PatrickHand] md:text-2xl 2xl:text-6xl">
            {!! $title !!}
        </h2>
        <p class="text-sm font-light pt-3 pb-12 md:text-lg">
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
