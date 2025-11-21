@props([
    'image_path',
    'image_alt',
    'title',
    'content',
    'have_button' => true,
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',

])

<section class="flex flex-col gap-6 md:flex-row-reverse">
    <figure>
        <img src="{!! $image_path !!}"
             alt="{!! $image_alt !!}">
    </figure>
    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-4">
            <h2 class="text-xl font-medium">
                {!! $title !!}
            </h2>
            <p class="text-sm font-light">
                {!! $content !!}
            </p>
        </div>

        @if($have_button)
            <x-public.buttons.button
                :route_name="$btn_url"
                :title="$btn_title"
                :label="$btn_label"
                :class="$btn_class"/>
        @endif
    </div>
</section>
