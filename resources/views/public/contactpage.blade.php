@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="{{__('public/contact.page_title')}}">
    <main class="lg:flex lg:flex-row items-start">
        <x-public.sections.section-contact-forms
            title="{{__('public/contact.section.title')}}"
            content="{{__('public/contact.section.content')}}"
            sub_title="{{__('public/contact.section.sub_title')}}"
            :coords="$coords"
        />

        <x-public.sections.form
            class="lg:w-2/3"
            title="{{__('public/contact.form.title')}}"
            sub_title="{{__('public/contact.form.sub_title')}}">
            <fieldset class="flex flex-col gap-6">

                <x-public.form.fields.input
                    field_name="{{__('public/contact.form.fields.name.label')}}"
                    label="{{__('public/contact.form.fields.name.label')}}"
                    type="text"
                    placeholder="{{__('public/contact.form.fields.name.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/contact.form.fields.first_name.label')}}"
                    label="{{__('public/contact.form.fields.first_name.label')}}"
                    type="text"
                    placeholder="{{__('public/contact.form.fields.first_name.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/contact.form.fields.email.label')}}"
                    label="{{__('public/contact.form.fields.email.label')}}"
                    type="email"
                    placeholder="{{__('public/contact.form.fields.email.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/contact.form.fields.object.label')}}"
                    label="{{__('public/contact.form.fields.object.label')}}"
                    type="text"
                    placeholder="{{__('public/contact.form.fields.object.placeholder')}}"
                />

                <x-public.form.fields.textarea
                    field_name="{{__('public/contact.form.fields.message.label')}}"
                    label="{{__('public/contact.form.fields.message.label')}}"
                    placeholder="{{__('public/contact.form.fields.message.placeholder')}}"
                />

            </fieldset>

            <x-public.form.fields.input_submit
                label="{{__('public/contact.form.submit_label')}}"
            />

        </x-public.sections.form>


    </main>


</x-public.app>
