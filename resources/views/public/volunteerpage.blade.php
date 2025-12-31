@php

    $coords = [
        ['href' => 'tel:04 54 23 12 54 65', 'title' => 'Appeler le numéro', 'label' => '04 54 23 12 54 65',],
        ['href' => 'mailto:contact@lespattesheureuses.be', 'title' => 'Envoyer un mail', 'label' => 'contact@lespattesheureuses.be',],
        ['href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique', 'title' => 'Aller à l‘adresse', 'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',]
    ];

@endphp

<x-public.app title="{{__('public/volunteer.page_title')}}">
    <main class="lg:flex lg:flex-row ">

    <x-public.sections.section-contact-forms
            title="{{__('public/volunteer.contact_section.title')}}"
            content="{{__('public/volunteer.contact_section.content')}}"
            sub_title="{{__('public/volunteer.contact_section.sub_title')}}"
            :coords="$coords"
        />

        <x-public.sections.form
            class="lg:w-2/3"
            title="{{__('public/volunteer.form.title')}}"
            sub_title="{{__('public/volunteer.form.sub_title')}}">
            <fieldset class="flex flex-col gap-6">
                <x-public.form.fields.input
                    field_name="{{__('public/volunteer.form.fields.name.label')}}"
                    label="{{__('public/volunteer.form.fields.name.label')}}"
                    type="text"
                    placeholder="{{__('public/volunteer.form.fields.name.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/volunteer.form.fields.first_name.label')}}"
                    label="{{__('public/volunteer.form.fields.first_name.label')}}"
                    type="text"
                    placeholder="{{__('public/volunteer.form.fields.name.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/volunteer.form.fields.email.label')}}"
                    label="{{__('public/volunteer.form.fields.email.label')}}"
                    type="email"
                    placeholder="{{__('public/volunteer.form.fields.email.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/volunteer.form.fields.phone.label')}}"
                    label="{{__('public/volunteer.form.fields.phone.label')}}"
                    type="tel"
                    placeholder="{{__('public/volunteer.form.fields.phone.placeholder')}}"
                />

                <x-public.form.fields.input
                    field_name="{{__('public/volunteer.form.fields.address.label')}}"
                    label="{{__('public/volunteer.form.fields.address.label')}}"
                    type="text"
                    placeholder="{{__('public/volunteer.form.fields.address.placeholder')}}"
                />

                <x-public.form.fields.textarea
                    field_name="{{__('public/volunteer.form.fields.message.label')}}"
                    label="{{__('public/volunteer.form.fields.message.label')}}"
                    placeholder="{{__('public/volunteer.form.fields.message.placeholder')}}"
                />

            </fieldset>

            <x-public.form.fields.input_submit
                label="{{__('public/volunteer.form.submit')}}"
            />

        </x-public.sections.form>


    </main>


</x-public.app>
