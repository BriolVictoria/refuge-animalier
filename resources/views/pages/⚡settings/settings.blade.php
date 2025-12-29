<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">Profil</h1>
        <section class="flex flex-col gap-11 ">
            <h2 class="sr-only">Profil</h2>

            <x-admin.settings.information_profil
                title="Informations générales"
                content="Consultez et mettez à jour vos informations personnelles afin que votre profil soit toujours à jour."
            >

                <div class="flex flex-col">
                    @if ($userAvatar)
                        <img src="{{ $userAvatar->temporaryUrl() }}" alt="Aperçu de l'image"
                             class="w-32 h-32 rounded-full mt-2">
                    @else
                        <img
                            src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/img/profil_image.svg') }}"
                            alt="Avatar actuel"
                            class="aspect-square w-[7.8125rem] h-[7.8125rem] rounded-full object-cover object-center">
                    @endif
                    <input type="file" id="avatarInput" wire:model="userAvatar" class="hidden">

                    <label for="avatarInput"
                           class="self-start cursor-pointer px-4 py-2 mt-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition">Modifier
                        l'image</label>

                    @error('userAvatar')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>


                <x-admin.form.field.input
                    wire="userName"
                    field_name="Nom complet"
                    label="Nom complet"
                    type="text"
                    placeholder="John Doe"
                />


                <x-admin.form.field.input
                    wire="userEmail"
                    field_name="Adresse mail"
                    label="Adresse mail"
                    type="email"
                    placeholder="john.doe@gmail.com"
                />

                <x-admin.form.field.input
                    wire="userPhoneNumber"
                    field_name="Téléphone"
                    label="Téléphone"
                    type="tel"
                    placeholder="04/70 54.23.54.12"
                />

                <x-admin.form.field.selected
                    wire="userRole"
                    field_name="Rôle"
                    label="Rôle"
                    :options="$this->roles"
                    select="Bénévole"
                />

                <x-admin.form.field.input
                    wire="userCreationDate"
                    field_name="Date d'inscription"
                    label="Date d'inscription"
                    type="date"
                    placeholder="12/12/2025"
                />

            </x-admin.settings.information_profil>

            <x-admin.settings.password
                title="Sécurité du compte"
                route="#"
                label="Confirmer la modification de mot de passe"
                title_button="Confirmer la modification de mot de passe"
                class="bg-blue-900 self-start text-xs text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600"
            >
                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="Mot de passe actuel"
                    label="Mot de passe actuel"
                    type="password"
                />

                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="Nouveau mot de passe"
                    label="Nouveau mot de passe"
                    type="password"
                />

                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="Configuration du nouveau mot de passe"
                    label="Configuration du nouveau mot de passe"
                    type="password"
                />
            </x-admin.settings.password>

            <x-admin.settings.notification_settings
                title="Préférence de notifications"
            />
            <x-admin.form.field.button
                label="Enregistrer les modifications"
                title_button="Enregistrer les modifications"
                click_wire="update"
            />
        </section>
    </div>
</main>
