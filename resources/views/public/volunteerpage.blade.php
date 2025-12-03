@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="Formulaire de demande de bénévolat">
    <main class="lg:flex lg:flex-row ">

    <x-public.sections.section-contact-forms
            title="Envie de nous aider &nbsp;?"
            content="Faites votre demande d’adoption pour adopter votre animal de rêve"
            sub_title="Nos coordonnées"
            :coords="$coords"
        />

        <x-public.sections.form
            class="lg:w-2/3"
            title="Formulaire de demande de bénévolat"
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
                    field_name="phone"
                    label="Numéro de téléphone"
                    type="tel"
                    placeholder="+32 4 56 12 76 32 45"
                />

                <x-public.form.fields.input
                    field_name="address"
                    label="Adresse compléte"
                    type="text"
                    placeholder="Rue des Lilas, Argentine, 3234 n°132"
                />

                <x-public.form.fields.textarea
                    field_name="message"
                    label="Pourquoi devenir bénévole &nbsp;?"
                    placeholder="Votre message"
                />

            </fieldset>

            <x-public.form.fields.input_submit
                label="Envoyer la demande"
            />

        </x-public.sections.form>


    </main>


</x-public.app>
