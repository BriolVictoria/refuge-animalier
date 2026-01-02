@props([
    'title',
    'animals',

])

<section class="flex flex-col items-center gap-6 md:flex-row-reverse md:grid md:grid-cols-9 2xl:grid-cols-12">
    <div class="flex flex-col gap-[4.5rem] md:col-start-1 md:col-end-10 2xl:col-start-1 2xl:col-end-13">
        <h2 class="text-center text-xl font-medium">{!! $title !!}</h2>

        <div class="flex flex-col gap-4 md:flex-row md:justify-between md:col-start-1 md:col-end-10 2xl:col-start-1 2xl:col-end-13">
            <x-public.form.fields.search_input/>
        </div>

        <div class="flex flex-col gap-8 items-center md:grid md:grid-cols-2 2xl:grid-cols-3">

        @foreach($animals as $animal)
            <x-public.sections.card
                image_path="{{ !empty($animal->images[0]) ? asset('storage/animals/' . $animal->images[0]) : asset('assets/img/animalProfil.jpg')}}"
                image_alt="{{__('public/homepage.animal_alt', ['name' => $animal->name])}}"
                :animal="$animal"
                :definitions="[
                        'name' => $animal->name,
                        'age' => $animal->age,
                        'breed' => $animal->breed,
                        'color' => $animal->coat,
                        'attitude' => $animal->attitude,
                        'statut' => $animal->state,
                    ]"
                btn_url="{!! route('public.animals.show', ['locale' => app()->getLocale(), 'animal' => $animal->id]) !!}"
                btn_title="{{__('public/animals.card.see_profile_title', ['name' => $animal->name])}}"
                btn_label="{{__('public/animals.card.see_profile')}}"
                btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
            />
        @endforeach
            @if($animals->isEmpty())
                <p class="mt-4 text-sm text-gray-500">
                    {{ __('public/animals.animal_none') }}
                </p>
            @endif
        </div>

    </div>

</section>
