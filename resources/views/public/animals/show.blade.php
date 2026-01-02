@php
    $buttons=['route_name'=>route('public.animals.index', ['locale' => app()->getLocale()]), 'title'=> 'Retour aux animaux', 'label' => 'Retour aux animaux', 'class' => 'md:col-start-4 md:col-end-7 md:row-start-3 lg:col-start-5 lg:col-end-9 lg:row-start-3 border-blue-900 border-[0.09375rem] text-blue-900 transition-transform duration-300 hover:scale-105'];
@endphp

<x-public.app title="{{__('public/animals.show.page_name', ['name' => $animal->name])}}">

    <x-public.sections.show_section
        ariane_link="{!! route('public.animals.index', ['locale' => app()->getLocale()]) !!}"
        ariane_name="{{__('public/animals.show.breadcrumb.link')}}"
        ariane_title="{{__('public/animals.show.breadcrumb.current')}}"
        image_src="{!! asset('assets/img/arrow_arianne.svg') !!}"
        image_alt="{{__('public/animals.show.breadcrumb.arrow_alt')}}"
        animal_first_img="{!! asset('assets/img/image_animal_bis.png') !!}"
        animal_first_alt="{{__('public/homepage.animal_alt', ['name' => $animal->name])}}"
        :buttons="$buttons"
        information_title="{{__('public/animals.show.information_title')}}"
        images_title="{{__('public/animals.show.images_title')}}"
        images_content="{{__('public/animals.show.images_content')}}"
        :animal="$animal"
    />


    <x-public.sections.animal_form
        title="{{__('public/animals.form.title', ['name' => $animal->name])}}"
        form_title="{{__('public/animals.form.form_title', ['name' => $animal->name])}}"
        form_sub_title="{{__('public/animals.form.form_sub_title')}}"
        :animal="$animal"
        id="animal_form"
    />
</x-public.app>
