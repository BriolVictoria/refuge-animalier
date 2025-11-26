@props([
    'ariane_link',
    'ariane_name',
    'ariane_title',
    'image_src',
    'image_alt',
    'animal_first_alt',
    'animal_first_img',
    'definitions',
    'buttonBottom',
    'buttonTop',
    'information_title',
    'images_title',
    'images',
    'images_content',
    'animal'
])

<section class=" bg-green-50 flex flex-col gap-12 md:flex-row-reverse">
    <h2 class="sr-only">{!! $animal->name !!}</h2>

    <div class="flex flex-col gap-12">
        <div class="flex flex-wrap gap-2 self-baseline">
            <a href="{!! $ariane_link !!}" class="text-xs text-black font-light">{!! $ariane_name !!}</a>
            <img src="{!! $image_src !!}" alt="{!! $image_alt !!}">
            <span class="text-xs font-medium">{!! $ariane_title !!}</span>
        </div>

        <div class="relative background_image z-0 ">
            <figure>
                <img src="{!! $animal_first_img !!}"
                     alt="{!! $animal_first_alt !!}" class="rounded-4xl">
            </figure>
        </div>

        <div class="flex gap-4">
            <h3 class="text-xl font-medium ">{!! $animal->name !!}</h3>
            <span
                class="bg-green-200 text-xs font-light px-3 py-2 rounded-4xl ">{!! $definitions['statut'] !!}</span>
        </div>

        <div class="flex flex-col gap-12">
            <dl class="grid grid-cols-2 gap-y-4">
                <dt class="text-sm font-light">Age&nbsp;:</dt>
                <dd class="text-sm font-medium">{!! $definitions['age'] !!}</dd>


                <dt class="text-sm font-light">Race&nbsp;:</dt>
                <dd class="text-sm font-medium">{!! $definitions['breed'] !!}</dd>


                <dt class="text-sm font-light">Pelage&nbsp;:</dt>
                <dd class="text-sm font-medium">{!! $definitions['color'] !!}</dd>


                <dt class="text-sm font-light">Attitude&nbsp;:</dt>
                <dd class="text-sm font-medium">{!! $definitions['attitude'] !!}</dd>

            </dl>

                <x-public.buttons.button
                    :route_name="$buttonTop['route_name']"
                    :title="$buttonTop['title']"
                    :label="$buttonTop['label']"
                    :class="$buttonTop['class']"/>
        </div>
    </div>

    <div class="flex flex-col gap-4">
        <h3 class="text-xl font-medium">{!! $information_title !!}</h3>
        <x-public.sections.information_part
            title="Caractère&nbsp;:"
            content="Calme et câline, affectueuse avec les enfants, aime les moments de repos
                    au soleil, un peu timide au
                    début, mais vite très attachante."
        />

        <x-public.sections.information_part
            title="Petit mot du refuge&nbsp;:"
            content="Sol est une vraie boule de tendresse.Elle attend avec impatience une
                famille qui saura lui offrir amour et douceur."
        />


    </div>

    <div class="flex flex-col gap-4">
        <h3 class="text-xl font-medium">{!! $images_title !!}</h3>
        <div class="flex flex-col gap-6">
            <p class="text-sm font-light">{!! $images_content !!}</p>
            @foreach($images as $image)
                <img class="rounded-sm" src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
            @endforeach
        </div>
    </div>

    <x-public.buttons.button
        :route_name="$buttonBottom['route_name']"
        :title="$buttonBottom['title']"
        :label="$buttonBottom['label']"
        :class="$buttonBottom['class']"/>
</section>
