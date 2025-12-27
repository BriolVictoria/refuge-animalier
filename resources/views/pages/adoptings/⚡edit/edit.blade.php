<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir les demandes d'adoptions" href="{!! route('adoptings.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">Demande d'adoptions</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Ajouter une demande</h1>
        </div>

        <section>
            <h2 class="sr-only">Demande d‘adoptions</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.volunteers.informations_volunteer
                    title="Informations sur l‘adoptant"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.input
                        wire="adoptingLastName"
                        field_name="Nom"
                        label="Nom"
                        type="text"
                        placeholder="Smith"
                    />

                    <x-admin.form.field.input
                        wire="adoptingFirstName"
                        field_name="Prénom"
                        label="Prénom"
                        type="text"
                        placeholder="Ambre"
                    />

                    <x-admin.form.field.input
                        wire="adoptingEmail"
                        field_name="Email"
                        label="Email"
                        type="email"
                        placeholder="ambre.smith@gmail.com"
                    />

                    <x-admin.form.field.input
                        wire="adoptingPhoneNumber"
                        field_name="Numéro de téléphone"
                        label="Numéro de téléphone"
                        type="tel"
                        placeholder="0470 23 43 12"
                    />

                    <x-admin.form.field.input
                        wire="adoptingAddress"
                        field_name="Adresse"
                        label="Adresse"
                        type="text"
                        placeholder="Rue des Lilas"
                    />

                    <x-admin.form.field.input
                        wire="adoptingCity"
                        field_name="Ville"
                        label="Ville"
                        type="text"
                        placeholder="Londres"
                    />

                    <x-admin.form.field.input
                        wire="adoptingPostCode"
                        field_name="Code postal"
                        label="Code postal"
                        type="text"
                        placeholder="1234"
                    />


                </x-admin.volunteers.informations_volunteer>

                {{--<x-admin.volunteers.informations_volunteer
                    title="Animal désiré"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.selected
                        wire="animal_name"
                        field_name="Animal désiré"
                        label="Animal désiré"
                        :options="$animal_name"
                    />

                </x-admin.volunteers.informations_volunteer>--}}

                <x-admin.volunteers.informations_volunteer
                    title="Environnement de vie"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.radio
                        wire="adoptingOtherAnimal"
                        title="Autres animaux à la maison?"
                        :radios="$this->other_animals"
                    />

                    <x-admin.form.field.radio
                        wire="adoptingChildren"
                        title="Présences d'enfants"
                        :radios="$this->children"
                    />

                    <x-admin.form.field.selected
                        wire="adoptingEnvironment"
                        field_name="Type d‘environnement"
                        label="Type d‘environnement"
                        :options="$this->environments"
                        select="Maison"
                    />

                    <x-admin.form.field.radio
                        wire="adoptingOutside"
                        title="Espace extérieur"
                        :radios="$this->outsides"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="Création du compte"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.input
                        wire="adoptingCreationDate"
                        field_name="Date de la demande"
                        label="Date de la demande"
                        type="date"
                        placeholder="23/23/23"
                    />

                    <x-admin.form.field.selected
                        wire="adoptingState"
                        field_name="Statut"
                        label="Statut"
                        :options="$this->states"
                        select="En attente d’adoption"
                    />


                    <x-admin.form.field.textarea
                        wire="adoptingComment"
                        field_name="Commentaire interne (réservé au personnel)"
                        label="Commentaire interne (réservé au personnel)"
                        placeholder="Commentaire"
                    />


                </x-admin.volunteers.informations_volunteer>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="Enregistrer la demande"
                        title_button="Enregistrer la demande"
                        click_wire="update"
                    />
                </div>

            </article>
        </section>
    </div>
</main>
