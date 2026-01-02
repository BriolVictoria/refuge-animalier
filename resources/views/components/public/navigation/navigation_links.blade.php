@php
    $items = [
       ['list_class'=>'mb-10.5', 'label'=> __('public/header_html.header.home.label'), 'title' => __('public/header_html.header.home.title'), 'route_name' => route('public.homepage', ['locale' => app()->getLocale()]), 'links_class' => 'text-lg font-medium mt-[4.5rem] inline-block lg:hidden transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800 inline-block'],
       ['list_class'=>'mb-10.5 lg:mb-0', 'label'=> __('public/header_html.header.about.label'), 'title' => __('public/header_html.header.about.title'), 'route_name' => route('public.aboutpage', ['locale' => app()->getLocale()]), 'links_class' => 'text-lg font-medium lg:text-sm min-[1750px]:text-2xl transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800 inline-block'],
       ['list_class'=>'mb-10.5 lg:mb-0', 'label'=> __('public/header_html.header.animals.label'), 'title' => __('public/header_html.header.animals.title'), 'route_name' => route('public.animals.index', ['locale' => app()->getLocale()]), 'links_class' => 'text-lg font-medium lg:text-sm min-[1750px]:text-2xl transition-transform duration-300 ease-in-out hover:scale-105 hover:text-blue-800 inline-block'],
       ['list_class'=>'mb-10.5 lg:mb-0', 'label'=> __('public/header_html.header.contact.label'), 'title' => __('public/header_html.header.contact.title'), 'route_name' => route('public.contactpage', ['locale' => app()->getLocale()]), 'links_class' => 'rounded-sm inline-block border-blue-900 border-[0.09375rem] text-sm font-medium px-7.5 py-2 text-blue-900 lg:py-1 transition-transform duration-300 ease-in-out hover:scale-105 hover:bg-blue-900 hover:text-white inline-block'],
   ];
@endphp

<ul class="nav_container flex flex-col items-center lg:flex-row gap-7 py-10 lg:justify-end min-[1200px]:gap-11">

    @foreach($items as $item)

        <x-public.navigation.navigation_link
            :list_class="$item['list_class']"
            :label="$item['label']"
            :title="$item['title']"
            :route_name="$item['route_name']"
            :links_class="$item['links_class']"/>

    @endforeach

    <a class="inline-block transition-transform duration-300 ease-in-out hover:scale-105 lg:hidden " href="{!! route('public.homepage', ['locale' => app()->getLocale()]) !!}" title="{{__('public/navigation.items.home.title')}}">
        <img src="{!! asset("assets/img/logo_bg_phone.svg") !!}" alt="{{__('public/navigation.logo_alt')}}">
    </a>




</ul>


