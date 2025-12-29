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
    <x-admin.animals.index.table
        title_sronly="Animaux"
        title="Animaux"
        label="+ Ajouter un animal"
        title_button="+ Ajouter un animal"
        route_name="{!! route('animals.create') !!}"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="Rechercher un animal"
    />
    @if($openModalForDelete)
        <x-admin.modal.modal
            title="Voulez-vous supprimé l’animal ?"
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
</main>
