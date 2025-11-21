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

<article class="bg-white rounded-lg relative">
    <h3 class="sr-only">{!! $section_title !!}</h3>
    <figure>
        <img class="rounded-t-lg rounded-tr-lg max-h-[11.5625rem] object-cover" width="500" height="400"
             src="{!! $image_path !!}" alt="{!! $image_alt !!}">
    </figure>

    <span class="absolute bg-blue-100 text-xs font-light px-4.5 py-1 rounded-4xl top-3 right-3">{!! $definitions['statut'] !!}</span>
    <div class="flex flex-col gap-3.5 p-3.5">
        <dl class="grid grid-cols-2 gap-y-4 gap-x-10.5">
            <div class="flex">
                <dt class="text-xs font-norma pr-2.5">Nom: </dt>
                <dd class="text-xs font-bold">{!! $definitions['name'] !!}</dd>
            </div>
            <div class="flex">
                <dt class="text-xs font-normal pr-2.5">Age: </dt>
                <dd class="text-xs font-bold">{!! $definitions['age'] !!}</dd>
            </div>
            <div class="flex">
                <dt class="text-xs font-normal pr-2.5">Race: </dt>
                <dd class="text-xs font-bold">{!! $definitions['breed'] !!}</dd>
            </div>
            <div class="flex">
                <dt class="text-xs font-normal pr-2.5">Pelage: </dt>
                <dd class="text-xs font-bold">{!! $definitions['color'] !!}</dd>
            </div>
            <div class="flex">
                <dt class="text-xs font-normal pr-2.5">Date: </dt>
                <dd class="text-xs font-bold">{!! $definitions['date'] !!}</dd>
            </div>
            <div class="flex">
                <dt class="text-xs font-normal pr-2.5">Attitude: </dt>
                <dd class="text-xs font-bold">{!! $definitions['attitude'] !!}</dd>
            </div>
        </dl>

        <x-public.buttons.button
            :route_name="$btn_url"
            :title="$btn_title"
            :label="$btn_label"
            :class="$btn_class"/>
    </div>


</article>
