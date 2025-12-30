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
            <a title="{{ __('admin/animals.ariane.animals_index')}}" href="{!! route('animals.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">{{ __('admin/animals.animals.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{ __('admin/animals.ariane.animal_show', ['name' => $animal->name])}}</h1>
        </div>

        <x-admin.animals.show
            title_sronly="{{ __('admin/animals.ariane.animal_show', ['name' => $animal->name])}}"
            title1="{!! $animal->name !!}"
            state="{!! $animal->state !!}"
            image_src="{!! asset('assets/img/image_animal_bis.png') !!}"
            image_alt="Image de chien"
            image_class="rounded-xl w-full max-w-xs mx-auto md:col-span-1"
            title2="{{ __('admin/animals.sections.visit_notes')}}"
            route_name="#"
            title_bouton="{{ __('admin/animals.ariane.animals_index')}}"
            label="{{ __('admin/animals.ariane.animals_index')}}"
            class="bg-blue-900 self-start text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600"

        />

    </div>

    @if($openVisitNote)
        <x-admin.modal.modal
            title="{{ __('admin/animals.ariane.animals_index')}}"
        >
            <x-admin.form.field.form>
                <x-admin.form.field.input
                    wire="noteEmail"
                    field_name="{{ __('admin/animals.fields.email')}}"
                    label="{{ __('admin/animals.fields.email')}}"
                    type="email"
                    placeholder="{{ __('admin/animals.placeholder.email')}}"
                />

                <x-admin.form.field.textarea
                    wire="noteNote"
                    field_name="{{ __('admin/animals.fields.note')}}"
                    label="{{ __('admin/animals.fields.note')}}"
                    placeholder="{{ __('admin/animals.placeholder.note')}}"
                />

                <x-admin.form.field.button
                    label="{{ __('admin/animals.buttons.create_note')}}"
                    title_button="{{ __('admin/animals.buttons.create_note')}}"
                    click_wire="create"
                />
            </x-admin.form.field.form>
        </x-admin.modal.modal>
    @endif

    @if($noteToEdit)
        <x-admin.modal.modal
            title="{{ __('admin/animals.buttons.edit_note')}}"
        >
            <x-admin.form.field.form>
                <x-admin.form.field.input
                    wire="noteEmail"
                    field_name="{{ __('admin/animals.fields.email')}}"
                    label="{{ __('admin/animals.fields.email')}}"
                    type="email"
                    placeholder="{{ __('admin/animals.placeholder.email')}}"
                />

                <x-admin.form.field.textarea
                    wire="noteNote"
                    field_name="{{ __('admin/animals.fields.note')}}"
                    label="{{ __('admin/animals.fields.note')}}"
                    placeholder="{{ __('admin/animals.placeholder.note')}}"
                />

                <x-admin.form.field.button
                    label="{{ __('admin/animals.buttons.edit_note')}}"
                    title_button="{{ __('admin/animals.buttons.edit_note')}}"
                    click_wire="create"
                />
            </x-admin.form.field.form>
        </x-admin.modal.modal>
    @endif

    @if($openModalForDelete)
        <x-admin.modal.modal
            title="{{ __('admin/animals.delete_modal.animal.title')}}"
        >

            <p class="text-sm text-gray-600">
                {{ __('admin/animals.delete_modal.animal.description')}}
            </p>


            <div class="flex flex-col justify-center gap-4 pt-4">

                <x-admin.button.delete_button
                    wire_delete="deleteAnimal({{ $animalToDelete }})"
                    delete_message="{{ __('admin/animals.delete_modal.animal.delete_button')}}"
                    class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                >
                    {{ __('admin/animals.buttons.delete')}}
                </x-admin.button.delete_button>

                <x-admin.button.button
                    wire:click="closeModal"
                    route_name="#"
                    title_button="{{ __('admin/animals.delete_modal.animal.cancel_button')}}"
                    label="{{ __('admin/animals.buttons.cancel')}}"
                    class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                />


            </div>

        </x-admin.modal.modal>
    @endif

    @if($openModalForDelete)
        <x-admin.modal.modal
            title="{{ __('admin/animals.delete_modal.note.title')}}"
        >

            <p class="text-sm text-gray-600">
                {{ __('admin/animals.delete_modal.note.description')}}
            </p>


            <div class="flex flex-col justify-center gap-4 pt-4">

                <x-admin.button.delete_button
                    wire_delete="deleteNote({{ $noteToDelete }})"
                    delete_message="{{ __('admin/animals.delete_modal.note.delete_button')}}"
                    class="px-6 py-2 bg-red-600 text-white text-lg rounded-lg
                           transition-all duration-300 hover:bg-red-700 hover:scale-105"
                >
                    {{ __('admin/animals.buttons.delete')}}
                </x-admin.button.delete_button>

                <x-admin.button.button
                    wire:click="closeModal"
                    route_name="#"
                    title_button="{{ __('admin/animals.delete_modal.note.cancel_button')}}"
                    label="{{ __('admin/animals.buttons.cancel')}}"
                    class="px-6 py-2 border border-gray-300 text-gray-600 rounded-lg
                           transition-all duration-300 hover:bg-gray-100"
                />


            </div>

        </x-admin.modal.modal>
    @endif
</main>
