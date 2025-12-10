@php
    $role =['Administateur', 'Bénévole'];

 $radios =[
  ['field_name' => 'Femme', 'name' => 'sex'],
  ['field_name' => 'Homme', 'name' => 'sex'],
];
@endphp

<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">Paramètres</h1>
        <section class="flex flex-col gap-11 ">
            <h2 class="sr-only">Paramètres</h2>

            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <h3 class="text-sm font-medium">Informations générales</h3>
                <p>Retrouvez ici vos informations personnelles et mettez-les à jour si nécessaire pour garantir la bonne
                    gestion de votre compte.</p>
                <x-admin.form.field.form>
                    <fieldset class="flex flex-col gap-6 md:grid md:grid-cols-2 lg:grid-cols-3">

                        <x-admin.form.field.input
                            field_name="Nom complet"
                            label="Nom complet"
                            type="text"
                            placeholder="John Doe"
                        />

                        <x-admin.form.field.radio
                            title="Sexe"
                            :radios="$radios"
                        />


                        <x-admin.form.field.input
                            field_name="Adresse mail"
                            label="Adresse mail"
                            type="email"
                            placeholder="john.doe@gmail.com"
                        />

                        <x-admin.form.field.input
                            field_name="Téléphone"
                            label="Téléphone"
                            type="tel"
                            placeholder="04/70 54.23.54.12"
                        />

                        <x-admin.form.field.selected
                            field_name="Rôle"
                            label="Rôle"
                            :options="$role"
                            select="Bénévole"
                        />

                        <x-admin.form.field.input
                            field_name="Date d'inscription"
                            label="Date d'inscription"
                            type="date"
                            placeholder="12/12/2025"
                        />
                    </fieldset>
                </x-admin.form.field.form>


            </article>

            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] p-6 h-full">
                <h3 class="text-sm font-medium">Sécurité du compte</h3>
                <x-admin.form.field.form>
                    <fieldset class="flex flex-col gap-6 lg:grid lg:grid-cols-2">
                        <x-admin.form.field.input
                            field_name="Mot de passe actuel"
                            label="Mot de passe actuel"
                            type="password"
                        />

                        <x-admin.form.field.input
                            field_name="Nouveau mot de passe"
                            label="Nouveau mot de passe"
                            type="password"
                        />

                        <x-admin.form.field.input
                            field_name="Configuration du nouveau mot de passe"
                            label="Configuration du nouveau mot de passe"
                            type="password"
                        />

                    </fieldset>

                    <x-admin.button.button
                        route_name="#"
                        label="Confirmer la modification de mot de passe"
                        title_button="Confirmer la modification de mot de passe"
                        class="bg-blue-900 self-start text-xs text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600"/>
                </x-admin.form.field.form>
            </article>

            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] p-6 h-full">
                <h3 class="text-sm font-medium">Préférences de notifications</h3>
                <div class="flex items-center justify-between w-full">
                    <span class="text-xs mr-14">Notifications par email</span>
                    <label for="toggle" class="flex items-end cursor-pointer">
                        <input type="checkbox" id="toggle" class="sr-only peer">
                        <div class="block relative bg-blue-200 w-12 h-7 p-1 rounded-full before:absolute before:bg-white before:w-5 before:h-5 before:p-1 before:rounded-full before:transition-all before:duration-500 before:left-1 peer-checked:bg-blue-900 peer-checked:before:left-6 peer-checked:before:bg-white"></div>
                    </label>
                </div>

                <div class="flex items-center justify-between w-full">
                    <span class="text-xs mr-14">Notifications tableau de bord</span>
                    <label for="toggle1" class="flex items-end cursor-pointer">
                        <input type="checkbox" id="toggle1" class="sr-only peer">
                        <div class="block relative bg-blue-200 w-12 h-7 p-1 rounded-full before:absolute before:bg-white before:w-5 before:h-5 before:p-1 before:rounded-full before:transition-all before:duration-500 before:left-1 peer-checked:bg-blue-900 peer-checked:before:left-6 peer-checked:before:bg-white"></div>
                    </label>
                </div>

                <div class="flex items-center justify-between w-full">
                    <span class="text-xs mr-14">Alertes adoption urgentes</span>
                    <label for="toggle2" class="flex items-end cursor-pointer">
                        <input type="checkbox" id="toggle2" class="sr-only peer">
                        <div class="block relative bg-blue-200 w-12 h-7 p-1 rounded-full before:absolute before:bg-white before:w-5 before:h-5 before:p-1 before:rounded-full before:transition-all before:duration-500 before:left-1 peer-checked:bg-blue-900 peer-checked:before:left-6 peer-checked:before:bg-white"></div>
                    </label>
                </div>

                <div class="flex items-center justify-between w-full">
                    <span class="text-xs mr-14">Rappel de RDV</span>
                    <label for="toggle3" class="flex items-end cursor-pointer">
                        <input type="checkbox" id="toggle3" class="sr-only peer">
                        <div class="block relative bg-blue-200 w-12 h-7 p-1 rounded-full before:absolute before:bg-white before:w-5 before:h-5 before:p-1 before:rounded-full before:transition-all before:duration-500 before:left-1 peer-checked:bg-blue-900 peer-checked:before:left-6 peer-checked:before:bg-white"></div>
                    </label>
                </div>

            </article>


            <div class="flex flex-col lg:flex-row gap-6 mx-8">
                <x-admin.button.button
                    route_name="#"
                    title_button="Enregistrer les modifications"
                    label="Enregistrer les modifications"
                    class="bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600 w-1/1 inline-block"/>

                <x-admin.button.button
                    route_name="#"
                    title_button="Annuler les modifications"
                    label="Annuler les modifications"
                    class="border border-blue-900 self-start text-blue-900 transition-all duration-300 hover:scale-101 hover:text-blue-600 hover:border-blue-600 w-1/1 inline-block"/>

            </div>
            </section>
    </div>
</main>
