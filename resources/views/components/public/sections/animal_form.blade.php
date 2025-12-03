@props([
    'title',
    'form_title',
    'form_sub_title',
    'animal',
    'id'
])

<section class="flex flex-col" id="{!! $id??'' !!}">
    <h2 class="text-xl font-medium pb-4">{!! $title !!}</h2>

    <div class="flex flex-col lg:flex-row lg:w-full lg:gap-10">

        <div class="lg:w-1/2 2xl:w-2/5">
            <img
                src="{!! asset('assets/img/image_animal_bis.png') !!}"
                alt="Image test"
                class="hidden lg:block lg:w-full lg:object-cover lg:rounded-xl"
            >
        </div>

        <div class="w-full lg:w-3/5 xl:w-1/2 2xl:w-2/5">
            <x-public.sections.form
                class="not_form lg:w-full lg:max-w-2xl"
                title="Formulaire de contact"
                sub_title="Les champs * sont des champs requis">
                <fieldset class="flex flex-col gap-6 ">
                    <div class="flex flex-col gap-6 md:flex-row">
                        <div class=" flex-1">
                            <x-public.form.fields.input
                                field_name="name"
                                label="Nom"
                                type="text"
                                placeholder="Smith"
                            />
                        </div>

                        <div class=" flex-1">
                            <x-public.form.fields.input
                                field_name="first-name"
                                label="Prénom"
                                type="text"
                                placeholder="Ambre"
                            />

                        </div>


                    </div>

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
                </fieldset>

                <x-public.form.fields.input_submit
                    label="Envoyer la demande d'adoption"/>

            </x-public.sections.form>
        </div>


    </div>

</section>
