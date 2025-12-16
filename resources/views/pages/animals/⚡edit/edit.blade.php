@php
    $type =['Chien', 'Chat', 'Lapin'];

     $radios =[
  ['field_name' => 'Femelle', 'name' => 'sex'],
  ['field_name' => 'Mâle', 'name' => 'sex'],
];

          $statut =['En attente d‘adoption', 'Adopté', 'En soins'];

              $buttons =[
  ['route' => '#', 'label' => 'Modifier la fiche de l‘animal', 'title_bouton' => 'Modifier la fiche de l‘animal', 'class' => 'bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600'],
  ['route' => '#', 'label' => 'Annuler la modification', 'title_bouton' => 'Annuler la modification', 'class' => 'border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600'],

];

@endphp

<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a href="{!! route('animals.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">Animaux</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Modifier {!! $animal->name !!}</h1>
        </div>

        <section>
            <h2 class="sr-only">Modification d'un animal</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.animals.informations_animal
                    title="Informations générales"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >
                    <x-admin.form.field.input
                        wire="animalName"
                        field_name="Nom"
                        label="Nom"
                        type="text"
                        placeholder="Pedro"
                    />

                    <x-admin.form.field.selected
                        wire="animalType"
                        field_name="Type"
                        label="Type"
                        :options="$type"
                        select="Chien"
                    />

                    <x-admin.form.field.input
                        wire="animalAge"
                        field_name="Age"
                        label="Age"
                        type="number"
                        placeholder="2 ans"
                    />

                    <x-admin.form.field.radio
                        wire="animalSex"
                        title="Sexe"
                        :radios="$radios"
                    />

                    <x-admin.form.field.input
                        wire="animalRace"
                        field_name="Race"
                        label="Race"
                        type="text"
                        placeholder="Golden"
                    />

                    <x-admin.form.field.input
                        wire="animalCoat"
                        field_name="Pelage"
                        label="Pelage"
                        type="text"
                        placeholder="Beige"
                    />
                </x-admin.animals.informations_animal>

                <x-admin.animals.informations_animal
                    title="Santé et caractéristiques"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >
                    <x-admin.form.field.input
                        wire="animalVaccine"
                        field_name="Vaccin"
                        label="Vaccin"
                        type="text"
                        placeholder="Vacciné"
                    />

                    <x-admin.form.field.selected
                        wire="animalState"
                        field_name="Statut"
                        label="Statut"
                        :options="$statut"
                        select="En attente d'adoption"
                    />


                    <x-admin.form.field.textarea
                        wire="animalTrait"
                        field_name="Caractère"
                        label="Caractère"
                        placeholder="Caractère"
                    />
                </x-admin.animals.informations_animal>

                <x-admin.animals.buttons_animal_create
                    :buttons="$buttons"
                />

            </article>

        </section>
    </div>
</main>
