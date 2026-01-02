@props([
    'ariane_link',
    'ariane_name',
    'ariane_title',
    'image_src',
    'image_alt',
    'animal_first_alt',
    'animal_first_img',
    'buttons',
    'information_title',
    'images_title',
    'images',
    'images_content',
    'animal'
])

<section class=" bg-green-50 flex flex-col gap-12">
    <h2 class="sr-only">{!! $animal->name !!}</h2>

    <div class="flex flex-col gap-12 md:grid md:grid-cols-9 lg:grid-cols-12 items-start">
        <div class="md:col-start-6 md:col-end-10 lg:col-start-8 lg:col-end-13 min-md:sticky min-md:top-10">
            <figure class="flex justify-center">
                <img
                    src="{{ !empty($animal->images[0]) ? asset('storage/animals/' . $animal->images[0]) : asset('assets/img/animalProfil.jpg')}}"
                    alt="{{ __('public/animals.animal_alt', ['name' => $animal->name]) }}"
                    class="rounded-4xl 2xl:w-[30rem]"
                    width="500"
                    height="500"
                >
            </figure>
        </div>

        <div
            class="flex flex-col gap-8 md:col-start-1 md:col-end-5 md:row-start-1 lg:col-start-1 lg:col-end-7 lg:row-start-1">
            <div class="flex flex-wrap gap-2 self-baseline">
                <a href="{!! $ariane_link !!}" class="text-xs text-black font-light">{!! $ariane_name !!}</a>
                <img src="{!! $image_src !!}" alt="{!! $image_alt !!}">
                <span class="text-xs font-medium">{!! $ariane_title !!}</span>
            </div>

            <div class="flex gap-4">
                <h3 class="text-xl font-medium ">{!! $animal->name !!}</h3>
                <span
                    class="bg-green-200 text-xs font-light px-3 py-2 rounded-4xl ">{!! $animal->state !!}</span>
            </div>

            <div class="flex flex-col gap-12 ">
                <dl class="flex flex-col gap-4 ">
                    <div class="flex gap-4">
                        <dt class="text-sm font-light">{{__('public/animals.show.fields.age')}}&nbsp;:</dt>
                        <dd class="text-sm font-medium">{!! $animal->age !!}</dd>
                    </div>

                    <div class="flex gap-4">
                        <dt class="text-sm font-light">{{__('public/animals.show.fields.breed')}}&nbsp;:</dt>
                        <dd class="text-sm font-medium">{!! $animal->breed !!}</dd>
                    </div>

                    <div class="flex gap-4">
                        <dt class="text-sm font-light">{{__('public/animals.show.fields.coat')}}&nbsp;:</dt>
                        <dd class="text-sm font-medium">{!! $animal->coat !!}</dd>

                    </div>

                    <div class="flex gap-4">
                        <dt class="text-sm font-light">{{__('public/animals.show.fields.attitude')}}&nbsp;:</dt>
                        <dd class="text-sm font-medium">{!! $animal->attitude !!}</dd>
                    </div>


                </dl>
            </div>

            <div class="flex flex-col gap-6 ">
                <h3 class="text-xl font-medium">{!! $information_title !!}</h3>
                <x-public.sections.information_part
                    title="{{__('public/animals.show.info_parts.character')}}"
                    content="{{__('public/animals.show.info_parts.character_content')}}"
                />

                <x-public.sections.information_part
                    title="{{__('public/animals.show.info_parts.shelter_note')}}"
                    content="{{__('public/animals.show.info_parts.shelter_note_content')}}"
                />
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 md:grid md:grid-cols-9 lg:grid lg:grid-cols-12">
        @if($animal->images !== null)
            <h3 class="text-xl font-medium md:col-start-1 md:col-end-4 lg:col-start-1 lg:col-end-6">{!! $images_title !!}</h3>
            <div class="flex flex-col gap-6 md:col-start-1 md:col-end-10 lg:col-start-1 lg:col-end-13">
                <p class="text-sm font-light">{!! $images_content !!}</p>
                <div class="flex flex-col gap-8 min-[570px]:flex-row justify-center items-center flex-wrap">
                    @foreach($animal->images as $image)
                        <img class="rounded-sm w-72 h-72 object-cover" width="24"
                             src="{{asset('storage/animals/' . $image)}}"
                             alt="{{__('public/animals.animal_alt', ['name' => $animal->name])}}">
                    @endforeach
                </div>
            </div>
        @else
            <h3 class="text-xl text-blue-900 font-regular md:col-start-1 md:col-end-4 lg:col-start-5 lg:col-end-9">{{__('public/animals.animal_none_img', ['name' => $animal->name])}}</h3>
        @endif
        <x-public.buttons.button
            :route_name="$buttons['route_name']"
            :title="$buttons['title']"
            :label="$buttons['label']"
            :class="$buttons['class']"/>
    </div>


</section>
