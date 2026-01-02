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

<section {!! $attributes->merge(['class' => 'flex flex-col items-center gap-6 md:grid md:grid-cols-9 2xl:grid-cols-12 ']) !!}>

    <figure class="md:col-start-1 md:col-end-5 2xl:col-start-2 2xl:col-end-7 2xl:flex 2xl:justify-center">
        <img class="2xl:w-[34rem]"
             width="500"
             height="500"
            src="{!! $image_path !!}"
             alt="{!! $image_alt !!}">
    </figure>


    <div class="flex flex-col gap-6 md:col-start-5 md:col-end-10 2xl:col-start-8 2xl:col-end-12 ">
        <div class="flex flex-col gap-4">
            <h2 class="text-xl font-medium 2xl:text-2xl">
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
