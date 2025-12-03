@php
    $definitions =[
           'name' => 'Pedro',
           'age' => '6 mois',
           'breed' => 'Golden',
           'color' => 'Beige',
           'date' => '21/12/24',
           'attitude' => 'Calme',
           'statut' => 'Disponible',
        ];
@endphp

@props([
    'animals',
    'title',
    'content',
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',
])

<section class="bg-green-50 flex flex-col items-center gap-8 md:grid md:grid-cols-9 2xl:grid-cols-12">
    <div class="flex flex-col gap-4 md:col-start-3 md:col-end-8 2xl:col-start-4 2xl:col-end-10">
        <h2 class="text-center text-xl font-medium">
            {!! $title!!}
        </h2>
        <p class="text-center text-sm font-light">
            {!! $content!!}
        </p>
    </div>
    <div
        class="flex flex-col gap-8 items-center md:col-start-3 md:col-end-8 lg:flex-row lg:col-start-1 lg:justify-center lg:col-end-10 2xl:gap-8 2xl:flex-row 2xl:col-start-2 2xl:col-end-12">
        @foreach($animals as $animal)
            <x-public.sections.card
                :section_title="'Animal:'. $animal->name"
                :image_path="asset('assets/img/image_animal.png')"
                image_alt="Image d'un chien (un golden) couché sur de l'herbe"
                :animal="$animal"
                :definitions="[
                        'name' => $animal->name,
                        'age' => $animal->age,
                        'breed' => $animal->breed,
                        'color' => $animal->coat,
                        'attitude' => $animal->attitude,
                        'statut' => $animal->state,
                    ]"
                btn_url="{!! route('public.animals.show', $animal->id) !!}"
                :btn_title="'Vers la fiche '. $animal->name"
                btn_label="Voir la fiche"
                btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
            />
        @endforeach
    </div>

    <x-public.buttons.button
        :route_name="$btn_url"
        :title="$btn_title"
        :label="$btn_label"
        :class="$btn_class"/>

</section>
