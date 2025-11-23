@php
    $navigations = [
           ['list_class'=>'pb-3.5', 'label'=> 'Accueil', 'title' => 'Vers la page Accueil', 'route_name' => route('public.homepage'), 'links_class' => 'text-xs font-normal pt-6 inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'Le refuge', 'title' => 'Vers la page Le refuge', 'route_name' => route('public.aboutpage'), 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'Nos animaux', 'title' => 'Vers la page Nos animaux', 'route_name' => route('public.animals.index'), 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'Devenir bénévole', 'title' => 'Vers la page Devenir bénévole', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'Contactez-nous', 'title' => 'Vers la page Contactez-nous', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
       ];

    $contact_details = [
           ['list_class'=>'pb-3.5', 'label'=> '04 72 56 91 42', 'title' => 'Vers le numéro', 'route_name' => '#', 'links_class' => 'text-xs font-normal pt-6 inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'contact@lespattesheureuses.be', 'title' => 'Vers l‘adresse mail', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> '12 Rue des Fleurs, 69000 Heusy, Belgique', 'title' => 'Vers l‘adresse', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
    ];

    $legal_notices = [
           ['list_class'=>'pb-3.5', 'label'=> 'Mentions légales', 'title' => 'Vers la page Mentions légales', 'route_name' => '#', 'links_class' => 'text-xs font-normal pt-6 inline-block '],
           ['list_class'=>'pb-3.5', 'label'=> 'Politique de confidentialité', 'title' => 'Vers la page Politique de confidentialité', 'route_name' => '#', 'links_class' => 'text-xs font-normal inline-block '],
    ];


@endphp

<footer class="bg-white shadow-[var(--shadow-xl)] py-11.5 px-[1.25rem] ">

    <h2 class="sr-only">Footer</h2>
    <nav>
        <h3 class="text-lg font-medium">Navigation</h3>
        <ul>
            @foreach($navigations as $navigation)
                <x-public.navigation.navigation_link
                    :list_class="$navigation['list_class']"
                    :label="$navigation['label']"
                    :title="$navigation['title']"
                    :route_name="$navigation['route_name']"
                    :links_class="$navigation['links_class']"/>

            @endforeach
        </ul>
    </nav>

    <div>
        <h3 class="text-lg font-medium pt-10.5">Coordonnées</h3>
        <ul>
            @foreach($contact_details as $contact_detail)

                <x-public.navigation.navigation_link
                    :list_class="$contact_detail['list_class']"
                    :label="$contact_detail['label']"
                    :title="$contact_detail['title']"
                    :route_name="$contact_detail['route_name']"
                    :links_class="$contact_detail['links_class']"/>

            @endforeach
        </ul>
    </div>


    <div>
        <h3 class="text-lg font-medium pt-10.5">Mentions légales</h3>

        <ul>
            @foreach($legal_notices as $legal_notice)

                <x-public.navigation.navigation_link
                    :list_class="$legal_notice['list_class']"
                    :label="$legal_notice['label']"
                    :title="$legal_notice['title']"
                    :route_name="$contact_detail['route_name']"

                    :links_class="$legal_notice['links_class']"/>

            @endforeach
        </ul>
    </div>


    <div class="flex flex-col items-center pt-10.5">
        <a href="{!! route('public.homepage') !!}" title="Vers la page Accueil">
            <img src="{!! asset("assets/img/logo_admin.svg") !!}" width="300"  alt="Logo Les Pattes Heureuses avec deux pattes vertes">
        </a>
       <p class="text-center pt-3">©&nbsp;2025 Les Pattes Heureuses. Tous droits réservés.</p>
    </div>


</footer>
