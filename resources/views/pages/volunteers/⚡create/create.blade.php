<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="{{__('admin/volunteers.ariane.volunteer_index')}}" href="{!! route('volunteers.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">{{__('admin/volunteers.volunteers.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="{{__('admin/volunteers.volunteers.image_alt')}}">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{__('admin/volunteers.ariane.volunteer_create')}}</h1>
        </div>

        <section>
            <h2 class="sr-only">{{__('admin/volunteers.volunteers.title_sronly')}}</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/volunteers.form.sections.personal_info.title')}}"
                    content="{{__('admin/volunteers.form.sections.personal_info.description')}}"
                >

                    <x-admin.form.field.input
                        wire="volunteerLastName"
                        field_name="{{__('admin/volunteers.form.fields.last_name.label')}}"
                        label="{{__('admin/volunteers.form.fields.last_name.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.last_name.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerFirstName"
                        field_name="{{__('admin/volunteers.form.fields.first_name.label')}}"
                        label="{{__('admin/volunteers.form.fields.first_name.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.first_name.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerEmail"
                        field_name="{{__('admin/volunteers.form.fields.email.label')}}"
                        label="{{__('admin/volunteers.form.fields.email.label')}}"
                        type="email"
                        placeholder="{{__('admin/volunteers.form.fields.email.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPhoneNumber"
                        field_name="{{__('admin/volunteers.form.fields.phone_number.label')}}"
                        label="{{__('admin/volunteers.form.fields.phone_number.label')}}"
                        type="tel"
                        placeholder="{{__('admin/volunteers.form.fields.phone_number.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerAdresse"
                        field_name="{{__('admin/volunteers.form.fields.adresse.label')}}"
                        label="{{__('admin/volunteers.form.fields.adresse.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.adresse.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerTown"
                        field_name="{{__('admin/volunteers.form.fields.town.label')}}"
                        label="{{__('admin/volunteers.form.fields.town.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.town.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPostalCode"
                        field_name="{{__('admin/volunteers.form.fields.postal_code.label')}}"
                        label="{{__('admin/volunteers.form.fields.postal_code.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.postal_code.placeholder')}}"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/volunteers.form.sections.availabilities.title')}}"
                    content="{{__('admin/volunteers.form.sections.availabilities.description')}}"
                >

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.monday"
                        field_name="{{__('admin/volunteers.form.availabilities.monday')}}"
                        label="{{__('admin/volunteers.form.availabilities.monday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.tuesday"
                        field_name="{{__('admin/volunteers.form.availabilities.tuesday')}}"
                        label="{{__('admin/volunteers.form.availabilities.tuesday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.wednesday"
                        field_name="{{__('admin/volunteers.form.availabilities.wednesday')}}"
                        label="{{__('admin/volunteers.form.availabilities.wednesday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.thursday"
                        field_name="{{__('admin/volunteers.form.availabilities.thursday')}}"
                        label="{{__('admin/volunteers.form.availabilities.thursday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.friday"
                        field_name="{{__('admin/volunteers.form.availabilities.friday')}}"
                        label="{{__('admin/volunteers.form.availabilities.friday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.saturday"
                        field_name="{{__('admin/volunteers.form.availabilities.saturday')}}"
                        label="{{__('admin/volunteers.form.availabilities.saturday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.sunday"
                        field_name="{{__('admin/volunteers.form.availabilities.sunday')}}"
                        label="{{__('admin/volunteers.form.availabilities.sunday')}}"
                        :options="$this->options"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/volunteers.form.sections.account.title')}}"
                    content="{{__('admin/volunteers.form.sections.account.description')}}"
                >

                    <x-admin.form.field.input
                        wire="volunteerPassword"
                        field_name="{{__('admin/volunteers.form.fields.password.label')}}"
                        label="{{__('admin/volunteers.form.fields.password.label')}}"
                        type="password"
                        placeholder="{{__('admin/volunteers.form.fields.password.placeholder')}}"
                    />

                </x-admin.volunteers.informations_volunteer>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="{{__('admin/volunteers.form.buttons.create')}}"
                        title_button="{{__('admin/volunteers.form.buttons.create')}}"
                        click_wire="create"
                    />
                </div>

            </article>
        </section>

    </div>
</main>
