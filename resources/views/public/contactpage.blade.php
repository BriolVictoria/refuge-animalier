@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="Formulaire de contact">

    <x-public.sections.section-contact-forms
        title="Vous avez une question sur le refuge &nbsp;?"
        content="Ecrivez-nous un message pour qu’on puisse y répondre"
        sub_title="Nos coordonnées"
        :coords="$coords"
    />

    <x-public.sections.form>
        <x-slot:title>
            Formulaire de contact
        </x-slot:title>
        <x-slot:sub_title>
            Les champs * sont des champs requis
        </x-slot:sub_title>
        <x-slot:content>
            <x-public.form.fields.input
                field_name="name"
                label="Nom"
                type="text"
                placeholder="Smith"
            />

            <x-public.form.fields.input
                field_name="first-name"
                label="Prénom"
                type="text"
                placeholder="Ambre"
            />

            <x-public.form.fields.input
                field_name="email"
                label="Adresse mail"
                type="email"
                placeholder="ambre.smith@gmail.com"
            />

            <x-public.form.fields.input
                field_name="object"
                label="Objet"
                type="text"
                placeholder="Votre objet"
            />

            <x-public.form.fields.textarea
                field_name="message"
                label="Message"
                placeholder="Votre message"
            />


            <x-public.buttons.button
                route_name="#"
                title="Envoyer le message"
                label="Envoyer le message"
                class="bg-blue-900 text-white self-start"/>
        </x-slot:content>
    </x-public.sections.form>



</x-public.app>
