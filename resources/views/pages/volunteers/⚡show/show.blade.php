@php
    $definitions =[
        ['title' => 'Nom', 'content' => $volunteer->last_name],
        ['title' => 'Prénom', 'content' => $volunteer->first_name],
        ['title' => 'Email', 'content' => $volunteer->email],
        ['title' => 'Numéro de téléphone', 'content' => $volunteer->phone_number],
        ['title' => 'Adresse', 'content' => $volunteer->adresse],
        ['title' => 'Code postal', 'content' => $volunteer->postal_code],
        ['title' => 'Ville', 'content' => $volunteer->town],
        ['title' => 'Mot de passe', 'content' => $volunteer->password],
    ];

    $buttons =[
        ['route_name' => route('volunteers.edit', $volunteer->id), 'label' => 'Modifier la fiche', 'title_button' => 'Modifier le fiche de {!! $volunteer->name !!}', 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-full 2xl:row-3'],
        ['route_name' => '#', 'label' => 'Supprimer le fiche', 'title_button' => 'Supprimer le fiche de {!! $volunteer->name !!}', 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-full 2xl:row-3'],

    ];


@endphp


<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a href="{!! route('volunteers.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">Bénévoles</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Fiche de {!! $volunteer->first_name !!}</h1>
        </div>

        <x-admin.volunteers.show
            title_sronly="Fiche de {!! $volunteer->first_name !!}"
            title1="{!! $volunteer->first_name !!}"
            :definitions="$definitions"
            :buttons="$buttons"
        />


    </div>
</main>
