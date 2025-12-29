<main class="w-full">
    @if (session()->has('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 2500)"
            x-show="show"
            x-transition
            class="fixed top-10 right-10 z-50
               px-4 py-3 rounded-lg
               bg-green-600 text-white text-md shadow-md"
        >
            {{ session('success') }}
        </div>
    @endif
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir touys les animaux" href="{!! route('animals.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">Animaux</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Fiche de {!! $animal->name !!}</h1>
        </div>

        <x-admin.animals.show
            title_sronly="Fiche de {!! $animal->name !!}"
            title1="{!! $animal->name !!}"
            state="{!! $animal->state !!}"
            image_src="{!! asset('assets/img/image_animal_bis.png') !!}"
            image_alt="Image de chien"
            image_class="rounded-xl w-full max-w-xs mx-auto md:col-span-1"
            title2="Notes de visites"
            route_name="#"
            title_bouton="Ajouter une note de viste"
            label="Ajouter une note de viste"
            class="bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600"

        />

    </div>

    @if($openVisitNote)
        <x-admin.modal.modal
            title="Ajouter une note"
        >
            <x-admin.form.field.form>
                <x-admin.form.field.input
                    wire="noteEmail"
                    field_name="Email"
                    label="Email"
                    type="email"
                    placeholder="ambre.smith@gmail.com"
                />

                <x-admin.form.field.textarea
                    wire="noteNote"
                    field_name="Note"
                    label="Note"
                    placeholder="Votre note"
                />

                <x-admin.form.field.button
                    label="Créer la note"
                    title_button="Créer la note"
                    click_wire="create"
                />
            </x-admin.form.field.form>
        </x-admin.modal.modal>
    @endif

    @if($noteToEdit)
        <x-admin.modal.modal
            title="Modfier la note"
        >
            <x-admin.form.field.form>
                <x-admin.form.field.input
                    wire="noteEmail"
                    field_name="Email"
                    label="Email"
                    type="email"
                    placeholder="ambre.smith@gmail.com"
                />

                <x-admin.form.field.textarea
                    wire="noteNote"
                    field_name="Note"
                    label="Note"
                    placeholder="Votre note"
                />

                <x-admin.form.field.button
                    label="Modifier la note"
                    title_button="Modifier la note"
                    click_wire="create"
                />
            </x-admin.form.field.form>
        </x-admin.modal.modal>
    @endif

    @if($openModalForDelete)
        <x-admin.modal.modal
            title="Voulez-vous supprimé cet animal?"
        >

            <p class="text-sm text-gray-600">
                Cette action est définitive.
                La fiche de cet animal sera supprimée et ne pourra pas être récupérée.
            </p>


            <div class="flex flex-col justify-center gap-4 pt-4">

                <x-admin.button.delete_button
                    wire_delete="deleteAnimal({{ $animalToDelete }})"
                    delete_message="Supprimer la fiche"
                    class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                >
                    Supprimer
                </x-admin.button.delete_button>

                <x-admin.button.button
                    wire:click="closeModal"
                    route_name="#"
                    title_button="Annuler"
                    label="Annuler"
                    class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                />


            </div>

        </x-admin.modal.modal>
    @endif

    @if($openModalForDelete)
        <x-admin.modal.modal
            title="Voulez-vous supprimé lA NOTE ?"
        >

            <p class="text-sm text-gray-600">
                Cette action est définitive.
                La NOTE sera supprimée et ne pourra pas être récupérée.
            </p>


            <div class="flex flex-col justify-center gap-4 pt-4">

                <x-admin.button.delete_button
                    wire_delete="deleteNote({{ $noteToDelete }})"
                    delete_message="Supprimer la fiche"
                    class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                >
                    Supprimer
                </x-admin.button.delete_button>

                <x-admin.button.button
                    wire:click="closeModal"
                    route_name="#"
                    title_button="Annuler"
                    label="Annuler"
                    class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                />


            </div>

        </x-admin.modal.modal>
    @endif
</main>
