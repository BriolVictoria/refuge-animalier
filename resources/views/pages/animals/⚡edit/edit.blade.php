<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="{{__('admin/animals.ariane.animals_index')}}" href="{!! route('animals.index', ['locale' => app()->getLocale()]) !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg">{{__('admin/animals.animals.title')}}</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="{{__('admin/animals.animals.image_alt')}}">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">{{__('admin/animals.ariane.animal_edit', ['name' => $animal->name])}}</h1>
        </div>

        <section>
            <h2 class="sr-only">{{__('admin/animals.ariane.animal_edit', ['name' => $animal ->name])}}</h2>
            <article class="flex flex-col gap-6 bg-white rounded-sm shadow-[var(--shadow-xl)] py-6 px-6 h-full">
                <x-admin.animals.informations_animal_show
                    title="{{ __('admin/animals.sections.definitions')}}"
                    content="{{ __('admin/animals.info_texts.general_information')}}"
                >
                    <div class="flex flex-col items-start gap-2">
                        <label class="text-sm font-medium text-gray-700">{{ __('admin/animals.fields.photo')}}</label>

                        <input type="file" wire:model="animalImages" multiple class="border rounded p-2">
                        @error('animalImages.*')
                        {{ $message }}
                        @enderror

                      {{--  @if ($animalImages)
                            <div class="flex flex-wrap gap-2 mt-2">
                                @foreach ($animalImages as $image)
                                    <img src="{{ $image->temporaryUrl() }}"
                                         alt="{{__('admin/animals.images_alt')}}"
                                         class="w-24 h-24 rounded-md object-cover object-center">
                                @endforeach
                            </div>
                        @endif--}}

                        @error('animalImages.*')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <x-admin.form.field.input
                        wire="animalName"
                        field_name="name"
                        label="{{ __('admin/animals.fields.name')}}"
                        type="text"
                        placeholder="{{ __('admin/animals.placeholder.name')}}"
                    />

                    <x-admin.form.field.selected
                        wire="animalType"
                        field_name="type"
                        label="{{ __('admin/animals.fields.type')}}"
                        :options="$this->types"
                    />

                    <x-admin.form.field.input
                        wire="animalAge"
                        field_name="age"
                        label="{{ __('admin/animals.fields.age')}}"
                        type="number"
                        placeholder="{{ __('admin/animals.placeholder.age')}}"
                    />

                    <x-admin.form.field.radio
                        wire="animalSex"
                        title="{{ __('admin/animals.fields.sex')}}"
                        :radios="$this->sexes"
                    />

                    <x-admin.form.field.input
                        wire="animalRace"
                        field_name="breed"
                        label="{{ __('admin/animals.fields.breed')}}"
                        type="text"
                        placeholder="{{ __('admin/animals.placeholder.breed')}}"
                    />


                    <x-admin.form.field.input
                        wire="animalCoat"
                        field_name="coat"
                        label="{{ __('admin/animals.fields.coat')}}"
                        type="text"
                        placeholder="{{ __('admin/animals.placeholder.coat')}}"
                    />

                    <x-admin.form.field.input
                        wire="animalDate"
                        field_name="date"
                        label="{{ __('admin/animals.fields.date')}}"
                        type="date"
                        placeholder="{{ __('admin/animals.placeholder.date')}}"
                    />
                </x-admin.animals.informations_animal_show>

                <x-admin.animals.informations_animal
                    title="{{ __('admin/animals.sections.health_and_characteristics')}}"
                    content="{{ __('admin/animals.info_texts.health_and_characteristics')}}"
                >

                    <x-admin.form.field.selected
                        wire="animalVaccine"
                        field_name="vaccine"
                        label="{{ __('admin/animals.fields.vaccine')}}"
                        :options="$this->vaccins"
                    />

                    <x-admin.form.field.selected
                        wire="animalState"
                        field_name="state"
                        label="{{ __('admin/animals.fields.state')}}"
                        :options="$this->states"
                    />


                    <x-admin.form.field.textarea
                        wire="animalAttitude"
                        field_name="attitude"
                        label="{{ __('admin/animals.fields.attitude')}}"
                        placeholder="{{ __('admin/animals.placeholder.attitude')}}"
                    />
                </x-admin.animals.informations_animal>

                <div class="flex flex-col lg:flex-row gap-6">
                    <x-admin.form.field.button
                        label="{{ __('admin/animals.buttons.edit_animal')}}"
                        title_button="{{ __('admin/animals.buttons.edit_animal')}}"
                        click_wire="update"
                    />
                </div>

            </article>

        </section>
    </div>
</main>
