@php
    $buttons =[
       ['route_name'=>route('public.animals.index', ['locale' => app()->getLocale()]), 'title'=> __('public/homepage.buttons.animals.title'), 'label' => __('public/homepage.buttons.animals.label'), 'class' => 'bg-blue-900 text-white transition-transform duration-300 hover:scale-105'],
       ['route_name'=>route('public.contactpage', ['locale' => app()->getLocale()]), 'title'=> __('public/homepage.buttons.contact.title'), 'label' => __('public/homepage.buttons.contact.label'), 'class' => 'border-blue-900 border-[0.09375rem] text-blue-900 transition-transform duration-300 hover:scale-105'],
    ];
@endphp

<x-public.app title="{{__('public/homepage.page_title')}}">
    <main>
        <x-public.sections.homepage-hero
            :image_path="asset('assets/img/imagetestcomputer.svg')"
            image_alt="{{__('public/homepage.hero.image_alt')}}"
            sub_title="{{__('public/homepage.hero.sub_title')}}"
            title="{{__('public/homepage.hero.title')}}"
            content="{{__('public/homepage.hero.content')}}"
            :buttons="$buttons"
        />

        <x-public.sections.text-media
            :image_path="asset('assets/img/dog_rabbit.png')"
            image_alt="{{__('public/homepage.about.image_alt')}}"
            title="{{__('public/homepage.about.title')}}"
            content="{{__('public/homepage.about.content')}}"
            :have_button="true"
            btn_url="{!! route('public.aboutpage', ['locale' => app()->getLocale()]) !!}"
            btn_title="{{__('public/homepage.about.button.title')}}"
            btn_label="{{__('public/homepage.about.button.label')}}"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.section-card
            title="{{__('public/homepage.animals.title')}}"
            content="{{__('public/homepage.animals.content')}}"
            :animals="$animals"
            btn_url="{!! route('public.animals.index', ['locale' => app()->getLocale()]) !!}"
            btn_title="{{__('public/homepage.animals.button.title')}}"
            btn_label="{{__('public/homepage.animals.button.label')}}"
            btn_class="bg-blue-900 text-white self-center md:col-[4/7] 2xl:col-[4/7] transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.text-media
            :image_path="asset('assets/img/volunteer_image.png')"
            image_alt="{{__('public/homepage.volunteer.image_alt')}}"
            title="{{__('public/homepage.volunteer.title')}}"
            content="{{__('public/homepage.volunteer.content')}}"
            :have_button="true"
            btn_url="{!! route('public.contactpage', ['locale' => app()->getLocale()]) !!}"
            btn_title="{{__('public/homepage.volunteer.button.title')}}"
            btn_label="{{__('public/homepage.volunteer.button.label')}}"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

    </main>
</x-public.app>
