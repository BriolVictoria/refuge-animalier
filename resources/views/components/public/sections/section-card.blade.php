@php
    $definitions =[
           ['title' => 'Nom:', 'content' => 'Pedro'],
           ['title' => 'Age:', 'content' => '6 mois'],
           ['title' => 'Race:', 'content' => 'Golden'],
           ['title' => 'Pelage:', 'content' => 'Beige'],
           ['title' => 'Date:', 'content' => '21/12/24'],
           ['title' => 'Attitude:', 'content' => 'Calme'],
        ];
    /*VOIR POUR AVOIR UN AUTRE NOM*/
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

    <x-public.sections.card
        section_title="Animal: Pedro"
        :image_path="asset('assets/img/image_animal.png')"
        image_alt="Image d'un chien (un golden) couché sur de l'herbe"
        :definitions="$definitions"
        btn_url="#"
        btn_title="Vers la page Pedro"
        btn_label="Voir la fiche"
        btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
    />

    <x-public.sections.card
        section_title="Animal: Pascal"
        :image_path="asset('assets/img/image_animal_bis.png')"
        image_alt="Image d'un chien (un cocker) qui regarde quelque chose derrière la caméra"
        :definitions="$definitions"
        btn_url="#"
        btn_title="Vers la page Pascal"
        btn_label="Voir la fiche"
        btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
    />

    <x-public.sections.card
        section_title="Animal: Pascal"
        :image_path="asset('assets/img/image_animal_bis.png')"
        image_alt="Image d'un chien (un cocker) qui regarde quelque chose derrière la caméra"
        :definitions="$definitions"
        btn_url="#"
        btn_title="Vers la page Pascal"
        btn_label="Voir la fiche"
        btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
    />

    <x-public.buttons.button
        :route_name="$btn_url"
        :title="$btn_title"
        :label="$btn_label"
        :class="$btn_class"/>

{{--VOIR SI ON DOIT FAIRE UN COMPOSANT POUR LES CLASSES QUI SE REPETTE--}}

</section>
