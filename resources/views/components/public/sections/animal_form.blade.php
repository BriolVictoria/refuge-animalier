@props([
    'title',
    'form_title',
    'form_sub_title',
    'animal',
    'id'
])

<section class="flex flex-col" id="{!! $id??'' !!}">
    <h2 class="text-xl font-medium pb-4">{!! $title !!}</h2>

    <div class="flex flex-col lg:flex-row lg:w-full lg:gap-10">

        <div class="lg:w-1/2 2xl:w-2/5">
            <img
                src="{{ !empty($animal->images[0]) ? asset('storage/animals/' . $animal->images[0]) : asset('assets/img/animalProfil.jpg')}}"
                alt="{{ __('public/animals.animal_alt', ['name' => $animal->name]) }}"
                class="hidden lg:block lg:w-full lg:object-cover lg:rounded-xl"
            >
        </div>

        <div class="w-full lg:w-3/5 xl:w-1/2 2xl:w-2/5">
            @if(session('success'))
                <div class="fixed top-50 right-10 z-50
               px-4 py-3 rounded-lg
               bg-blue-600 text-white text-md shadow-md">
                    {{ session('success') }}
                </div>
            @endif
            <x-public.sections.form
                action="{!! route('public.animal.store', ['locale' => app()->getLocale()]) !!}"
                class="not_form lg:w-full lg:max-w-2xl"
                title="{{__('public/animals.form.form_title', ['name' => $animal->name])}}"
                sub_title="{{__('public/animals.form.form_sub_title')}}">
                <fieldset class="flex flex-col gap-6 ">
                    <div class="flex flex-col gap-6 md:flex-row">
                        <div class=" flex-1">
                            <x-public.form.fields.input
                                field_name="last_name"
                                label="{{__('public/animals.form.fields.name')}}"
                                type="text"
                                placeholder="Smith"
                            />
                        </div>

                        <div class=" flex-1">
                            <x-public.form.fields.input
                                field_name="first_name"
                                label="{{__('public/animals.form.fields.first_name')}}"
                                type="text"
                                placeholder="Ambre"
                            />

                        </div>


                    </div>

                    <x-public.form.fields.input
                        field_name="email"
                        label="{{__('public/animals.form.fields.email')}}"
                        type="email"
                        placeholder="ambre.smith@gmail.com"
                    />

                    <x-public.form.fields.input
                        field_name="phone"
                        label="{{__('public/animals.form.fields.phone')}}"
                        type="tel"
                        placeholder="+32 4 56 12 76 32 45"
                    />

                    <x-public.form.fields.input
                        field_name="address"
                        label="{{__('public/animals.form.fields.address')}}"
                        type="text"
                        placeholder="Rue des Lilas"
                    />

                    <x-public.form.fields.input
                        field_name="city"
                        label="{{__('public/animals.form.fields.city')}}"
                        type="text"
                        placeholder="Londres"
                    />

                    <x-public.form.fields.input
                        field_name="postal_code"
                        label="{{__('public/animals.form.fields.postal_code')}}"
                        type="text"
                        placeholder="1245"
                    />


                    <x-public.form.fields.selected
                        field_name="animal_id"
                        label="{{__('public/animals.form.fields.animal')}}"
                        select="selected"
                        value="{!! $animal->id !!}"
                        option="{!! $animal->name !!}"
                    />

                    <x-public.form.fields.textarea
                        field_name="message"
                        label="{{__('public/animals.form.fields.message')}}"
                        placeholder="{{__('public/animals.form.fields.message')}}"
                    />
                </fieldset>

                <x-public.form.fields.input_submit
                    label="{{__('public/animals.form.submit_label')}}"/>

            </x-public.sections.form>
        </div>


    </div>

</section>
