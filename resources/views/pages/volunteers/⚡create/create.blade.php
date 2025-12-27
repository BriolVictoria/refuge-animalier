<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir tous les bénévoles" href="{!! route('volunteers.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">Bénévoles</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Ajouter un bénévole</h1>
        </div>

        <section>
            <h2 class="sr-only">Bénévoles</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.volunteers.informations_volunteer
                    title="Informations personnelles"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.input
                        wire="volunteerLastName"
                        field_name="Nom"
                        label="Nom"
                        type="text"
                        placeholder="Smith"
                    />

                    <x-admin.form.field.input
                        wire="volunteerFirstName"
                        field_name="Prénom"
                        label="Prénom"
                        type="text"
                        placeholder="Ambre"
                    />

                    <x-admin.form.field.input
                        wire="volunteerEmail"
                        field_name="Adresse email"
                        label="Adresse email"
                        type="email"
                        placeholder="ambre.smith@gmail.com"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPhoneNumber"
                        field_name="Numéro de téléphone"
                        label="Numéro de téléphone"
                        type="tel"
                        placeholder="0450 78 96 87"
                    />

                    <x-admin.form.field.input
                        wire="volunteerAdresse"
                        field_name="Adresse"
                        label="Adresse"
                        type="text"
                        placeholder="Rue des Lilas 50"
                    />

                    <x-admin.form.field.input
                        wire="volunteerTown"
                        field_name="Ville"
                        label="Ville"
                        type="text"
                        placeholder="Londres"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPostalCode"
                        field_name="Code postal"
                        label="Code Postal"
                        type="text"
                        placeholder="1234"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="Disponiblités"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.monday"
                        field_name="Lundi"
                        label="Lundi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.tuesday"
                        field_name="Mardi"
                        label="Mardi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.wednesday"
                        field_name="Mercredi"
                        label="Mercredi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.thursday"
                        field_name="Jeudi"
                        label="Jeudi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.friday"
                        field_name="Vendredi"
                        label="Vendredi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.saturday"
                        field_name="Samedi"
                        label="Samedi"
                        :options="$this->options"
                        select="Pas disponible"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.sunday"
                        field_name="Dimanche"
                        label="Dimanche"
                        :options="$this->options"
                        select="Pas disponible"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="Création du compte"
                    content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués : vétérinaires, soigneurs, familles d’accueil et amoureux des animaux."
                >

                    <x-admin.form.field.input
                        wire="volunteerPassword"
                        field_name="Mot de passe du compte"
                        label="Mot de passe du compte"
                        type="password"
                        placeholder="123456789"
                    />

                </x-admin.volunteers.informations_volunteer>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="Créer la fiche du bénévole"
                        title_button="Créer la fiche du bénévole"
                        click_wire="create"
                    />
                </div>

            </article>
        </section>

    </div>
</main>
