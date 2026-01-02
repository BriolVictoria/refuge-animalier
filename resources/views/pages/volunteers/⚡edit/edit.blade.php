<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="{{__('admin/volunteers.ariane.volunteer_index')}}" href="{!! route('volunteers.index', ['locale' => app()->getLocale()]) !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">{{__('admin/volunteers.volunteers.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="{{__('admin/volunteers.volunteers.image_alt')}}">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{__('admin/volunteers.ariane.volunteer_edit', ['name' => $volunteer->first_name])}}</h1>
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
                        field_name="last_name"
                        label="{{__('admin/volunteers.form.fields.last_name.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.last_name.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerFirstName"
                        field_name="first_name"
                        label="{{__('admin/volunteers.form.fields.first_name.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.first_name.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerEmail"
                        field_name="email"
                        label="{{__('admin/volunteers.form.fields.email.label')}}"
                        type="email"
                        placeholder="{{__('admin/volunteers.form.fields.email.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPhoneNumber"
                        field_name="phone"
                        label="{{__('admin/volunteers.form.fields.phone_number.label')}}"
                        type="tel"
                        placeholder="{{__('admin/volunteers.form.fields.phone_number.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerAdresse"
                        field_name="address"
                        label="{{__('admin/volunteers.form.fields.adresse.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.adresse.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerTown"
                        field_name="city"
                        label="{{__('admin/volunteers.form.fields.town.label')}}"
                        type="text"
                        placeholder="{{__('admin/volunteers.form.fields.town.placeholder')}}"
                    />

                    <x-admin.form.field.input
                        wire="volunteerPostalCode"
                        field_name="postal"
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
                        field_name="monday}"
                        label="{{__('admin/volunteers.form.availabilities.monday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.tuesday"
                        field_name="tuesday"
                        label="{{__('admin/volunteers.form.availabilities.tuesday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.wednesday"
                        field_name="wednesday"
                        label="{{__('admin/volunteers.form.availabilities.wednesday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.thursday"
                        field_name="thursday"
                        label="{{__('admin/volunteers.form.availabilities.thursday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.friday"
                        field_name="friday"
                        label="{{__('admin/volunteers.form.availabilities.friday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.saturday"
                        field_name="saturday"
                        label="{{__('admin/volunteers.form.availabilities.saturday')}}"
                        :options="$this->options"
                    />

                    <x-admin.volunteers.day_select
                        wire="volunteerAvailabilities.sunday"
                        field_name="sunday"
                        label="{{__('admin/volunteers.form.availabilities.sunday')}}"
                        :options="$this->options"
                    />


                </x-admin.volunteers.informations_volunteer>

                <x-admin.volunteers.informations_volunteer
                    title="{{__('admin/volunteers.form.sections.account.title')}}"
                    content="{{__('admin/volunteers.form.sections.account.description')}}"
                >
                    <div class="relative">
                        {{--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="#2B517A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-eye-icon lucide-eye">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>--}}

                        <button type="button" class="absolute right-3 top-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="#2B517A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off-icon lucide-eye-off"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/><path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/><path d="m2 2 20 20"/></svg>
                        </button>
                        <x-admin.form.field.input
                            wire="volunteerPassword"
                            field_name="password"
                            label="{{__('admin/volunteers.form.fields.password.label')}}"
                            type="password"
                            placeholder="{{__('admin/volunteers.form.fields.password.placeholder')}}"
                        />

                    </div>


                </x-admin.volunteers.informations_volunteer>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="{{__('admin/volunteers.form.buttons.edit')}}"
                        title_button="{{__('admin/volunteers.form.buttons.edit')}}"
                        click_wire="update"
                    />
                </div>

            </article>
        </section>
    </div>
</main>
