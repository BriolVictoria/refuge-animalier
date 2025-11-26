@props([
    'title',
    'form_title',
    'form_sub_title',
    'animal',
    'id'
])

<section class="flex flex-col" id="{!! $id??'' !!}">
    <h2 class="text-xl font-medium">{!! $title !!}</h2>
    <x-public.sections.form class="not_form">
        <x-slot:title>
            {!! $form_title !!}
        </x-slot:title>
        <x-slot:sub_title>
            {!! $form_sub_title !!}
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
                field_name="phone"
                label="Numéro de téléphone"
                type="tel"
                placeholder="+32 4 56 12 76 32 45"
            />

            <x-public.form.fields.selected
                field_name="animal"
                label="Nom de l'animal"
                select="selected"
                value="{!! $animal->name !!}"
                option="{!! $animal->name !!}"
            />


            <x-public.buttons.button
                route_name="#"
                title="Envoyer le message"
                label="Envoyer le message"
                class="bg-blue-900 text-white self-start"/>
        </x-slot:content>
    </x-public.sections.form>
</section>
