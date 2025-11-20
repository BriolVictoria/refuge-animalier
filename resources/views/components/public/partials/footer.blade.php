@php
    $navigations = [
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Accueil', 'title' => 'Vers la page Accueil', 'route_name' => '#', 'links_class' => 'text-xs font-normal mt-[1.5rem] inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'À propos', 'title' => 'Vers la page À propos', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Nos animaux', 'title' => 'Vers la page Nos animaux', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Devenir bénévole', 'title' => 'Vers la page Devenir bénévole', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Contactez-nous', 'title' => 'Vers la page Contactez-nous', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
       ];

    $contact_details = [
           ['list_class'=>'mb-[0.875rem]', 'label'=> '04 72 56 91 42', 'title' => 'Vers le numéro', 'route_name' => '#', 'links_class' => 'text-xs font-normal mt-[1.5rem] inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'contact@lespattesheureuses.be', 'title' => 'Vers l‘adresse mail', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> '12 Rue des Fleurs, 69000 Heusy, Belgique', 'title' => 'Vers l‘adresse', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
    ];

    $legal_notices = [
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Mentions légales', 'title' => 'Vers le numéro', 'route_name' => '#', 'links_class' => 'text-xs font-normal mt-[1.5rem] inline-block '],
           ['list_class'=>'mb-[0.875rem]', 'label'=> 'Politique de confidentialité', 'title' => 'Vers l‘adresse', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
    ];


@endphp

<footer class="bg-white shadow-xl pb-[1.5rem] pt-[3rem] px-[1.25rem]">

    <h2 class="sr-only">Footer</h2>
    <nav>
        <h3 class="text-lg leading-[var(--text-lg--line-height)] font-medium">Navigation</h3>
        <ul>
            @foreach($navigations as $navigation)

                <x-public.navigation.navigation_link
                    :list_class="$navigation['list_class']"
                    :label="$navigation['label']"
                    :title="$navigation['title']"
                    :links_class="$navigation['links_class']"/>

            @endforeach
        </ul>
    </nav>

    <div>
        <h3 class="text-lg leading-[var(--text-lg--line-height)] font-medium mt-[2.625rem]">Coordonnées</h3>
        <ul>
            @foreach($contact_details as $contact_detail)

                <x-public.navigation.navigation_link
                    :list_class="$contact_detail['list_class']"
                    :label="$contact_detail['label']"
                    :title="$contact_detail['title']"
                    :links_class="$contact_detail['links_class']"/>

            @endforeach
        </ul>
    </div>


    <div>
        <h3 class="text-lg leading-[var(--text-lg--line-height)] font-medium mt-[2.625rem]">Mentions légales</h3>

        <ul>
            @foreach($legal_notices as $legal_notice)

                <x-public.navigation.navigation_link
                    :list_class="$legal_notice['list_class']"
                    :label="$legal_notice['label']"
                    :title="$legal_notice['title']"
                    :links_class="$legal_notice['links_class']"/>

            @endforeach
        </ul>
    </div>


    <div class="flex flex-col items-center mt-[2.625rem]">
        <a href="{!! route('public.homepage') !!}" title="Vers la page Accueil">
            <img src="{!! asset("assets/img/logo_admin.svg") !!}" width="300"  alt="Logo les pattes heureuses">
        </a>
       <p class="text-center mt-[0.75rem]">© 2025 Les Pattes Heureuses. Tous droits réservés.</p>
    </div>


</footer>
