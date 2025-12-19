@php
    $definitions =[
        ['title' => 'Nom', 'content' => $adopting->last_name],
        ['title' => 'Prénom', 'content' => $adopting->first_name],
        ['title' => 'Adresse mail', 'content' => $adopting->email],
        ['title' => 'Nom de l‘animal désirée', 'content' => $adopting->animal->name . ' (' .$adopting->animal->breed .')'],
        ['title' => 'Numéro de téléphone', 'content' => $adopting->phone_number],
        ['title' => 'Adresse', 'content' => $adopting->address],
        ['title' => 'Ville', 'content' => $adopting->city],
        ['title' => 'Code postal', 'content' => $adopting->postcode],
        ['title' => 'D‘autres animaux à la maison', 'content' => $adopting->other_animal],
        ['title' => 'Présence d‘enfants', 'content' => $adopting->children],
        ['title' => 'Type d‘environement', 'content' => $adopting->environment],
        ['title' => 'Espace extérieur', 'content' => $adopting->outside],
        ['title' => 'Date de création du compte', 'content' => $adopting->creation_date],
        ['title' => 'Satut de la demande', 'content' => $adopting->state],
        ['title' => 'Commentaire interne (résérvé au personnel)', 'content' => $adopting->comment],
    ];

    $buttons =[
        ['route_name' => route('adoptings.edit', $adopting->id), 'label' => 'Modifier la fiche', 'title_button' => 'Modifier le fiche de {!! $volunteer->name !!}', 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
        ['route_name' => '#', 'label' => 'Supprimer le fiche', 'title_button' => 'Supprimer le fiche de {!! $volunteer->name !!}', 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3'],

    ];


@endphp

<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir les demande d‘adoption" href="{!! route('adoptings.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">Demandes d'adoption</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Fiche de {!! $adopting->first_name !!}</h1>
        </div>

        <x-admin.adoptings.show
            title_sronly="Fiche de {!! $adopting->first_name !!}"
            title1="{!! $adopting->first_name !!}"
            :definitions="$definitions"
            :buttons="$buttons"
        />



    </div>
</main>
