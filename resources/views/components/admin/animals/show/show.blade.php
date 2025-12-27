@props([
    'title_sronly',
    'title1',
    'title2',
    'state',
    'image_src',
    'image_class',
    'image_alt',
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
            <x-admin.animals.animals_state
                page="show"
                :state="$state"
            />
        </div>


        <img width="320" height="320" src="{!! $image_src !!}"
             alt="{!! $image_alt !!}"
             class="{!! $image_class !!}">


        <x-admin.animals.show.definitions_show_animal/>

        <div class="flex flex-col gap-3 md:col-span-3 lg:flex-row lg:justify-end">
            <x-admin.animals.show.buttons_show_animal/>
            <x-admin.button
                wire:click.prevent="openModal({{ $this->animal->id }})"
                route_name="#"
                label="Supprimer la fiche"
                title_button="Supprimer la fiche"
                class="border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3"
            />
        </div>


    </div>

    <div
        class="relative border border-blue-100 rounded-2xl shadow-md p-4 flex flex-col gap-6">

        <h3 class="text-xl font-medium text-blue-900">{!! $title2 !!}</h3>
        <x-admin.animals.show.visit/>

        <x-admin.button.button
            wire:click="openModalVisit('add_visit')"
            route_name="{!! $route_name !!}"
            title_button="{!! $title_bouton !!}"
            label="{!! $label !!}"
            class="{!! $class !!}"
        />
    </div>

</section>
