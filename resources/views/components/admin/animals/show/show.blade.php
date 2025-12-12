@props([
    'title_sronly',
    'title1',
    'title2',
    'state',
    'image_src',
    'image_class',
    'image_alt',
    'definitions',
    'buttons',
    'visits',
    'route_name',
    'title_bouton',
    'label',
    'class',
])

<section class="w-full flex flex-col gap-6">
    <h2 class="sr-only">{!! $title_sronly !!}</h2>

    <div
        class="relative border border-blue-100 rounded-2xl shadow-md p-4 flex flex-col gap-6 md:grid md:grid-cols-3 md:items-center">

        <h3 class="text-xl font-medium text-blue-900 md:col-span-2">{!! $title1 !!}</h3>

        <div class="flex md:justify-end">
            <span class="bg-green-200 text-xs font-light px-3 py-2 rounded-4xl w-fit">{!! $state !!}</span>
        </div>

        <img
            src="{!! $image_src !!}"
            alt="{!! $image_alt !!}"
            class="{!! $image_class !!}">


        <x-admin.animals.show.definitions_show_animal
            :definitions="$definitions"
        />

        <div class="flex flex-col gap-3 md:col-span-3 lg:flex-row lg:justify-end">
            <x-admin.animals.show.buttons_show_animal
                :buttons="$buttons"
            />
        </div>


    </div>

    <div
        class="relative border border-blue-100 rounded-2xl shadow-md p-4 flex flex-col gap-6">

        <h3 class="text-xl font-medium text-blue-900">{!! $title2 !!}</h3>
        <x-admin.animals.show.visit
            :visits="$visits"
/>
        <x-admin.button.button
            route_name="{!! $route_name !!}"
            title_button="{!! $title_bouton !!}"
            label="{!! $label !!}"
            class="{!! $class !!}"
        />
    </div>

</section>
