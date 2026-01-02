@props([
    'animals',
    'title',
    'content',
    'btn_url',
    'btn_label',
    'btn_title',
    'btn_class',
])

<section class="bg-green-50 flex flex-col items-center gap-8 md:grid md:grid-cols-9 2xl:grid-cols-12">
    <div class="flex flex-col gap-4 md:col-start-3 md:col-end-8 2xl:col-start-4 2xl:col-end-10">
        <h2 class="text-center text-xl font-medium">
            {!! $title!!}
        </h2>
        <p class="text-center text-sm font-light">
            {!! $content!!}
        </p>
    </div>
    <div
        class="flex flex-col gap-8 col-[1/10] items-center md:grid md:grid-cols-3 lg:flex-row lg:col-start-1 lg:justify-center lg:col-end-10 2xl:gap-8 2xl:flex-row 2xl:col-start-2 2xl:col-end-12">
        @foreach($animals as $animal)
            <x-public.sections.card
                :section_title="'AnimalEnum:'. $animal->name"
                :image_path="asset('assets/img/image_animal.png')"
                :image_alt="__('public/homepage.animal_alt', ['name' => $animal->name])"
                :animal="$animal"
                :definitions="[
                        'name' => $animal->name,
                        'age' => $animal->age,
                        'breed' => $animal->breed,
                        'color' => $animal->coat,
                        'attitude' => $animal->attitude,
                        'statut' => $animal->state,
                    ]"

                :btn_url="route('public.animals.show', ['locale' => app()->getLocale(), 'animal' => $animal->id])"
                :btn_title="__('public/homepage.animals.card.btn_title', ['name' => $animal->name])"
                :btn_label="__('public/homepage.animals.card.btn_label')"
                btn_class="border-blue-900 border-[0.09375rem] text-blue-900 mt-10"
            />
        @endforeach
    </div>

    <x-public.buttons.button
        :route_name="$btn_url"
        :title="$btn_title"
        :label="$btn_label"
        :class="$btn_class"/>

</section>
