@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="Formulaire de contact">
    <main class="lg:flex lg:flex-row items-start">
        <x-public.sections.section-contact-forms
            title="Vous avez une question sur le refuge &nbsp;?"
            content="Ecrivez-nous un message pour qu’on puisse y répondre"
            sub_title="Nos coordonnées"
            :coords="$coords"
        />

        <x-public.sections.form
            class="lg:w-2/3"
            title="Formulaire de contact"
            sub_title="Les champs * sont des champs requis">
            <fieldset class="flex flex-col gap-6">

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

            </fieldset>

            <x-public.form.fields.input_submit
                label="Envoyer le message"
            />

        </x-public.sections.form>


    </main>


</x-public.app>
