<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir tous les animaux" href="{!! route('animals.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">Animaux</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Ajouter un animal</h1>
        </div>

        <section>
            <h2 class="sr-only">Animaux</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.animals.informations_animal
                    title="Informations générales"
                    content="Renseignez les informations principales de l’animal, y compris son nom, son âge et son type."
                >
                    <div class="flex flex-col items-start gap-2">
                        <label class="text-sm font-medium text-gray-700">Images de l’animal</label>

                        <!-- Input multiple -->
                        <input type="file" wire:model="animalImages" multiple class="border rounded p-2">

                        <!-- Aperçu -->
                        @if ($animalImages)
                            <div class="flex flex-wrap gap-2 mt-2">
                                @foreach ($animalImages as $image)
                                    <img src="{{ $image->temporaryUrl() }}"
                                         alt="Aperçu image"
                                         class="w-24 h-24 rounded-md object-cover object-center">
                                @endforeach
                            </div>
                        @endif

                        @error('animalImages.*')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
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
                        :options="$this->types"
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
                        :radios="$this->sexes"
                    />

                    <x-admin.form.field.selected
                        wire="animalRace"
                        field_name="Race"
                        label="Race"
                        :options="$this->breeds"
                    />

                    <x-admin.form.field.input
                        wire="animalCoat"
                        field_name="Pelage"
                        label="Pelage"
                        type="text"
                        placeholder="Beige"
                    />

                    <x-admin.form.field.input
                        wire="animalDate"
                        field_name="Date de mise à jour (date du jour)"
                        label="Date de mise à jour (date du jour)"
                        type="date"
                        placeholder="21/12/2025"
                    />
                </x-admin.animals.informations_animal>

                <x-admin.animals.informations_animal
                    title="Santé et caractéristiques"
                    content="Indiquez les informations sur la santé, le statut et le caractère de l’animal."
                >

                    <x-admin.form.field.selected
                        wire="animalVaccine"
                        field_name="Vaccin"
                        label="Vaccin"
                        :options="$this->vaccins"
                        select="Vacciné"
                    />

                    <x-admin.form.field.selected
                        wire="animalState"
                        field_name="Statut"
                        label="Statut"
                        :options="$this->states"
                        select="En attente d’adoption"
                    />


                    <x-admin.form.field.textarea
                        wire="animalAttitude"
                        field_name="Caractèristiques"
                        label="Caractèristiques"
                        placeholder="Caractèristiques"
                    />
                </x-admin.animals.informations_animal>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="Créer la fiche de l‘animal"
                        title_button="Créer la fiche de l‘animal"
                        click_wire="create"
                    />
                </div>

            </article>

        </section>
    </div>
</main>
