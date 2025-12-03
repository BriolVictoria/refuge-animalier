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

    $images = [
        ['url' => asset('assets/img/image1.png'), 'alt' => 'Image d‘un chien'],
        ['url' => asset('assets/img/image2.png'), 'alt' => 'Image du même chien'],
        ['url' => asset('assets/img/image3.png'), 'alt' => 'Toujours la même image du chien'],
];


    $buttons=['route_name'=>route('public.animals.index'), 'title'=> 'Retour aux animaux', 'label' => 'Retour aux animaux', 'class' => 'md:col-start-4 md:col-end-7 md:row-start-3 lg:col-start-5 lg:col-end-9 lg:row-start-3 border-blue-900 border-[0.09375rem] text-blue-900 transition-transform duration-300 hover:scale-105'];


@endphp

<x-public.app title="Page de {!! $animal->name !!}">

    <x-public.sections.show_section
        ariane_link="{!! route('public.animals.index') !!}"
        ariane_name="Nos animaux"
        ariane_title="Fiche de l'animal"
        image_src="{!! asset('assets/img/arrow_arianne.svg') !!}"
        image_alt="Image d'un fleche"
        animal_first_img="{!! asset('assets/img/image_animal_bis.png') !!}"
        animal_first_alt="Image d'un chien (un cocker) qui regarde la caméra"
        :definitions="$definitions"
        :buttons="$buttons"
        information_title="Informations supplémentaires"
        images_title="Images supplémentaire"
        images_content="Nous avons ajouté plusieurs photos pour que vous puissiez ressentir toute
                    sa douceur et son charme unique. Chaque image montre un petit bout de sa personnalité."
        :images="$images"
        :animal="$animal"
    />


    <x-public.sections.animal_form
        title="Voulez-vous adopter {!! $animal->name !!} &nbsp;?"
        form_title="Formulaire de demande d’adoption pour {!! $animal->name !!}"
        form_sub_title="Les champs * sont des champs requis"
        :animal="$animal"
        id="animal_form"
    />
</x-public.app>
