@props([
    'section_title',
    'animal',
    'image_path',
    'image_alt',
    'definitions',
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',
])

<article class="bg-white rounded-lg relative shadow-[var(--shadow-xl)] w-full has-[a:hover]:scale-[102%] transition-transform duration-300 h-full">
    <a href="{!! route('public.animals.show', $animal->id) !!}" class="absolute top-0 bottom-0 left-0 right-0 z-50">
        <span class="sr-only">Voir la fiche de l’animal</span>
    </a>
        <figure>
        <img class="rounded-t-lg rounded-tr-lg max-h-[11.5625rem] object-cover w-full" width="500" height="400"
             src="{!! $image_path !!}" alt="{!! $image_alt !!}">
    </figure>
    <h3 class="text-xl font-medium text-center py-2">{!! $definitions['name'] !!}</h3>

    <span class="absolute bg-blue-100 text-xs font-light px-4.5 py-1 rounded-4xl top-3 right-3">{!! $definitions['statut'] !!}</span>
    <div class="flex flex-col gap-3.5 p-3.5 ">
        <dl class="grid grid-cols-2 gap-y-4 gap-x-10.5 bg-blue-50 px-4 py-4 rounded-sm">
            <div class="flex flex-col">
                <dt class="text-sm font-medium pr-2.5">Age&nbsp;: </dt>
                <dd class="text-xs font-light">{!! $definitions['age'] !!}</dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-sm font-medium pr-2.5">Race&nbsp;: </dt>
                <dd class="text-xs font-light">{!! $definitions['breed'] !!}</dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-sm font-medium pr-2.5">Pelage&nbsp;: </dt>
                <dd class="text-xs font-light">{!! $definitions['color'] !!}</dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-sm font-medium pr-2.5">Attitude&nbsp;: </dt>
                <dd class="text-xs font-light">{!! $definitions['attitude'] !!}</dd>
            </div>
        </dl>

        <x-public.buttons.button
            :route_name="$btn_url"
            :title="$btn_title"
            :label="$btn_label"
            :class="$btn_class"/>
    </div>

</article>
