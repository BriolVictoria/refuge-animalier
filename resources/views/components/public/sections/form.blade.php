@props([
    'title',
    'sub_title',
    'btn_url',
    'btn_title',
    'btn_label',
    'btn_class',
])

<section class="form flex flex-col gap-6 md:flex-row-reverse pt-[6rem]">
    <div class="flex flex-col gap-3">
        <h2 class="text-lg font-medium">{!! $title !!}</h2>
        <p class="text-xs font-light text-red-500">{!! $sub_title !!}</p>
    </div>

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
        :route_name="$btn_url"
        :title="$btn_title"
        :label="$btn_label"
        :class="$btn_class"/>

</section>
