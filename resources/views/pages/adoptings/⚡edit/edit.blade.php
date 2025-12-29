<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="{{__('admin/adoptings.ariane.adoptings_index')}}" href="{!! route('adoptings.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">{{__('admin/adoptings.adoptings.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{__('admin/adoptings.adoptings.title_edit')}}</h1>
        </div>

        <section>
            <h2 class="sr-only">{{__('admin/adoptings.adoptings.title_sronly')}}</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/adoptings.volunteer_sections.personal_info.title')}}"
                    content="{{__('admin/adoptings.volunteer_sections.personal_info.content')}}"
                >

                    <x-admin.form.field.input
                        wire="adoptingLastName"
                        field_name="{{__('admin/adoptings.fields.last_name')}}"
                        label="{{__('admin/adoptings.fields.last_name')}}"
                        type="text"
                        placeholder="Smith"
                    />

                    <x-admin.form.field.input
                        wire="adoptingFirstName"
                        field_name="{{__('admin/adoptings.fields.first_name')}}"
                        label="{{__('admin/adoptings.fields.first_name')}}"
                        type="text"
                        placeholder="Ambre"
                    />

                    <x-admin.form.field.input
                        wire="adoptingEmail"
                        field_name="{{__('admin/adoptings.fields.email')}}"
                        label="{{__('admin/adoptings.fields.email')}}"
                        type="email"
                        placeholder="ambre.smith@gmail.com"
                    />

                    <x-admin.form.field.input
                        wire="adoptingPhoneNumber"
                        field_name="{{__('admin/adoptings.fields.phone_number')}}"
                        label="{{__('admin/adoptings.fields.phone_number')}}"
                        type="tel"
                        placeholder="0470 23 43 12"
                    />

                    <x-admin.form.field.input
                        wire="adoptingAddress"
                        field_name="{{__('admin/adoptings.fields.address')}}"
                        label="{{__('admin/adoptings.fields.address')}}"
                        type="text"
                        placeholder="Rue des Lilas"
                    />

                    <x-admin.form.field.input
                        wire="adoptingCity"
                        field_name="{{__('admin/adoptings.fields.city')}}"
                        label="{{__('admin/adoptings.fields.cite')}}"
                        type="text"
                        placeholder="Londres"
                    />

                    <x-admin.form.field.input
                        wire="adoptingPostCode"
                        field_name="{{__('admin/adoptings.fields.postcode')}}"
                        label="{{__('admin/adoptings.fields.postcode')}}"
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
                    title="{{__('admin/adoptings.volunteer_sections.living_environment.title')}}"
                    content="{{__('admin/adoptings.volunteer_sections.living_environment.content')}}"
                >

                    <x-admin.form.field.radio
                        wire="adoptingOtherAnimal"
                        title="{{__('admin/adoptings.fields.other_animal')}}"
                        :radios="$this->other_animals"
                    />

                    <x-admin.form.field.radio
                        wire="adoptingChildren"
                        title="{{__('admin/adoptings.fields.children')}}"
                        :radios="$this->children"
                    />

                    <x-admin.form.field.selected
                        wire="adoptingEnvironment"
                        field_name="{{__('admin/adoptings.fields.environment')}}"
                        label="{{__('admin/adoptings.fields.environment')}}"
                        :options="$this->environments"
                        select="Maison"
                    />

                    <x-admin.form.field.radio
                        wire="adoptingOutside"
                        title="{{__('admin/adoptings.fields.outside')}}"
                        :radios="$this->outsides"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/adoptings.volunteer_sections.other_info.title')}}"
                    content="{{__('admin/adoptings.volunteer_sections.other_info.content')}}"
                >

                    <x-admin.form.field.input
                        wire="adoptingCreationDate"
                        field_name="{{__('admin/adoptings.fields.creation_date')}}"
                        label="{{__('admin/adoptings.fields.creation_date')}}"
                        type="date"
                        placeholder="23/23/23"
                    />

                    <x-admin.form.field.selected
                        wire="adoptingState"
                        field_name="{{__('admin/adoptings.fields.state')}}"
                        label="{{__('admin/adoptings.fields.state')}}"
                        :options="$this->states"
                        select="En attente d’adoption"
                    />


                    <x-admin.form.field.textarea
                        wire="adoptingComment"
                        field_name="{{__('admin/adoptings.fields.comment')}}"
                        label="{{__('admin/adoptings.fields.comment')}}"
                        placeholder="Commentaire"
                    />


                </x-admin.volunteers.informations_volunteer>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="{{__('admin/adoptings.actions.save')}}"
                        title_button="{{__('admin/adoptings.actions.save')}}"
                        click_wire="create"
                    />
                </div>

            </article>
        </section>
    </div>
</main>
