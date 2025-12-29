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
        class="relative border border-blue-100 rounded-2xl shadow-md p-4 flex flex-col gap-5">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-2">
            <h3 class="text-xl font-medium text-blue-900 md:col-span-2">{!! $title1 !!}</h3>


            <x-admin.animals.animals_state
                page="show"
                :state="$state"
            />
        </div>

        <div class="flex flex-col gap-4">
            <x-admin.animals.show.definitions_show_animal/>

            @if($this->animal->images && count($this->animal->images) > 0)
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($this->animal->images as $image)
                        <img
                            src="{{ asset('storage/' . $image) }}"
                            alt="Image de {{ $this->animal->name }}"
                            class="rounded-xl w-full aspect-square object-cover object-center shadow-md">
                    @endforeach
                </div>

            @else
                <img
                    src="{{ asset('assets/img/animalProfil.jpg') }}"
                    alt="Image de {{ $this->animal->name }}"
                    class="rounded-xl w-full aspect-square object-cover object-center shadow-md">
            @endif
        </div>
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
