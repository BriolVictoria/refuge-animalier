<main class="w-full">
    <div>
        <h1 class="py-4 px-8 text-xl text-blue-900 font-semibold border-b border-b-blue-900 w-1/1">{{__('admin/settings.page.title')}}</h1>
        <section class="flex flex-col gap-11 ">
            <h2 class="sr-only">{{__('admin/settings.page.sr_only')}}</h2>

            <x-admin.settings.information_profil
                title="{{__('admin/settings.information.title')}}"
                content="{{__('admin/settings.information.description')}}"
            >

                <div class="flex flex-col">
                    <img
                        src="{{ $userAvatar
                ? $userAvatar->temporaryUrl()
                : (auth()->user()->avatar
                    ? asset('storage/' . auth()->user()->avatar)
                    : asset('assets/img/profil_image.svg')) }}"
                        alt="{{__('admin/settings.information.avatar.current_alt')}}"
                        class="aspect-square w-32 h-32 rounded-full object-cover object-center"
                    >

                    <input type="file" id="avatarInput" wire:model="userAvatar" class="hidden">

                    <label for="avatarInput"
                           class="self-start cursor-pointer px-4 py-2 mt-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition">
                        {{ __('admin/settings.information.avatar.edit_button') }}
                    </label>

                    @error('userAvatar')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>


                <x-admin.form.field.input
                    wire="userName"
                    field_name="{{__('admin/settings.information.fields.name.label')}}"
                    label="{{__('admin/settings.information.fields.name.label')}}"
                    type="text"
                    placeholder="{{__('admin/settings.information.fields.name.placeholder')}}"
                />


                <x-admin.form.field.input
                    wire="userEmail"
                    field_name="{{__('admin/settings.information.fields.email.label')}}"
                    label="Adresse mail"
                    type="{{__('admin/settings.information.fields.name.email')}}"
                    placeholder="{{__('admin/settings.information.fields.email.placeholder')}}"
                />

                <x-admin.form.field.input
                    wire="userPhoneNumber"
                    field_name="{{__('admin/settings.information.fields.phone.label')}}"
                    label="{{__('admin/settings.information.fields.phone.label')}}"
                    type="tel"
                    placeholder="{{__('admin/settings.information.fields.phone.placeholder')}}"
                />

                <x-admin.form.field.selected
                    wire="userRole"
                    field_name="{{__('admin/settings.information.fields.role.label')}}"
                    label="{{__('admin/settings.information.fields.role.label')}}"
                    :options="$this->roles"
                />

                <x-admin.form.field.input
                    wire="userCreationDate"
                    field_name="{{__('admin/settings.information.fields.creation_date.label')}}"
                    label="{{__('admin/settings.information.fields.creation_date.label')}}"
                    type="date"
                    placeholder="{{__('admin/settings.information.fields.creation_date.placeholder')}}"
                />

            </x-admin.settings.information_profil>

            <x-admin.settings.password
                title="{{__('admin/settings.security.title')}}"
                route="#"
                label="{{__('admin/settings.security.button.label')}}"
                title_button="{{__('admin/settings.security.button.title')}}"
                class="bg-blue-900 self-start text-xs text-white transition-all duration-300 hover:scale-101 hover:bg-blue-600"
            >

                <div class="relative">
                    <button type="button" class="absolute right-3 top-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             stroke="#2B517A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-eye-off-icon lucide-eye-off">
                            <path
                                d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/>
                            <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/>
                            <path
                                d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/>
                            <path d="m2 2 20 20"/>
                        </svg>
                    </button>
                    <x-admin.form.field.input
                        wire="userPassword"
                        field_name="{{__('admin/settings.security.fields.current_password')}}"
                        label="{{__('admin/settings.security.fields.current_password')}}"
                        type="password"
                        value="{{auth()->user()->password}}"
                    />
                </div>

                <div class="relative">
                    <button type="button" class="absolute right-3 top-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             stroke="#2B517A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-eye-off-icon lucide-eye-off">
                            <path
                                d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/>
                            <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/>
                            <path
                                d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/>
                            <path d="m2 2 20 20"/>
                        </svg>
                    </button>
                    <x-admin.form.field.input
                        wire="userPassword"
                        field_name="{{__('admin/settings.security.fields.new_password')}}"
                        label="{{__('admin/settings.security.fields.new_password')}}"
                        type="password"
                    />
                </div>

                <div class="relative">
                    <button type="button" class="absolute right-3 top-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             stroke="#2B517A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-eye-off-icon lucide-eye-off">
                            <path
                                d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/>
                            <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/>
                            <path
                                d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/>
                            <path d="m2 2 20 20"/>
                        </svg>
                    </button>
                    <x-admin.form.field.input
                        wire="userPassword"
                        field_name="{{__('admin/settings.security.fields.confirm_password')}}"
                        label="{{__('admin/settings.security.fields.confirm_password')}}"
                        type="password"
                    />
                </div>
            </x-admin.settings.password>

            <x-admin.settings.notification_settings
                title="{{__('admin/settings.notifications.title')}}"
            />
            <x-admin.form.field.button
                label="{{__('admin/settings.buttons.save')}}"
                title_button="{{__('admin/settings.buttons.save_title')}}"
                click_wire="update"
            />
        </section>
    </div>
</main>
