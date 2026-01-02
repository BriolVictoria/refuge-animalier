<header class="relative bg-white shadow-[var(--shadow-xl)] px-[1.25rem] z-10  lg:px-[6.25rem]">
    <h1 class="sr-only">Les pattes heureuses</h1>

    {{--Menu (liens)--}}
    <nav class="relative flex justify-between items-center pt-4 pb-2.5">
        <h2 class="sr-only">{{__('public/header_html.navigation.main_title')}}</h2>
        <a class="transition-transform duration-300 ease-in-out hover:scale-105 min-[1130px]:hidden" href="{!! route('public.homepage', ['locale' => app()->getLocale()]) !!}" title="{{__('public/header_html.navigation.home.title')}}">
            <img width="50" height="40" src="{!! asset("assets/img/paws_logo.svg") !!}"
                 alt="{{__('public/header_html.navigation.home.alt_small_logo')}}">
        </a>

        <a class="transition-transform duration-300 ease-in-out hover:scale-105 hidden min-[1130px]:block pr-5" href="{!! route('public.homepage', ['locale' => app()->getLocale()]) !!}" title="{{__('public/header_html.navigation.home.title')}}">
            <img class="w-[20rem]" src="{!! asset("assets/img/full_logo_phone.svg") !!}" alt="{{__('public/header_html.navigation.home.alt_full_logo')}}">
        </a>

        <x-public.navigation.burger_menu/>

        <x-public.navigation.navigation_links/>

    </nav>
</header>
