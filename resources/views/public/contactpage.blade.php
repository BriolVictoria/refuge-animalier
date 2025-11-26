@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="Page de contact">

    <x-public.sections.section-contact-forms
        title="Vous avez une question sur le refuge &nbsp;?"
        content="Ecrivez-nous un message pour qu’on puisse y répondre"
        sub_title="Nos coordonnées"
        :coords="$coords"
        btn_url="#"
        btn_title="Envoyer le message"
        btn_label="Envoyer le message"
        btn_class="bg-blue-900 text-white self-start"
    />

</x-public.app>
