<main class="w-full">
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
</main>
