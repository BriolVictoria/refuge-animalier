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
                    @if ($userAvatar)
                        <img src="{{ $userAvatar->temporaryUrl() }}" alt="{{__('admin/settings.information.avatar.preview_alt')}}"
                             class="w-32 h-32 rounded-full mt-2">
                    @else
                        <img
                            src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/img/profil_image.svg') }}"
                            alt="{{__('admin/settings.information.avatar.current_alt')}}"
                            class="aspect-square w-[7.8125rem] h-[7.8125rem] rounded-full object-cover object-center">
                    @endif
                    <input type="file" id="avatarInput" wire:model="userAvatar" class="hidden">

                    <label for="avatarInput"
                           class="self-start cursor-pointer px-4 py-2 mt-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition">{{__('admin/settings.information.avatar.edit_button')}}</label>

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
                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="{{__('admin/settings.security.fields.current_password')}}"
                    label="{{__('admin/settings.security.fields.current_password')}}"
                    type="password"
                />

                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="{{__('admin/settings.security.fields.new_password')}}"
                    label="{{__('admin/settings.security.fields.new_password')}}"
                    type="password"
                />

                <x-admin.form.field.input
                    wire="userPassword"
                    field_name="{{__('admin/settings.security.fields.confirm_password')}}"
                    label="{{__('admin/settings.security.fields.confirm_password')}}"
                    type="password"
                />
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
