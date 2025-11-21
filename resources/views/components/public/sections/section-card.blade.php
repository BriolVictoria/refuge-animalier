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
    'title',
    'content',
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',
])

<section class="bg-green-50 flex flex-col items-center gap-6 md:flex-row-reverse">
    <div class="flex flex-col gap-4">
        <h2 class="text-center text-xl font-medium">
            {!! $title!!}
        </h2>
        <p class="text-center text-sm font-light">
            {!! $content!!}
        </p>
    </div>
    @for ($i = 0; $i < 3; $i++)

        <x-public.sections.card
            section_title="Animal: Pedro"
            :image_path="asset('assets/img/image_animal.png')"
            image_alt="Image d'un chien (un golden) couché sur de l'herbe"
            :definitions="$definitions"
            btn_url="#"
            btn_title="Vers la fiche Pedro"
            btn_label="Voir la fiche"
            btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
        />

    @endfor

    <x-public.buttons.button
        :route_name="$btn_url"
        :title="$btn_title"
        :label="$btn_label"
        :class="$btn_class"/>


</section>
