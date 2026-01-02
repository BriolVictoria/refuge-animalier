<header class="relative bg-white shadow-[var(--shadow-xl)] px-[1.25rem] z-10 lg:flex lg:flex-col lg:h-screen  lg:top-0 lg:sticky ">
    <h1 class="sr-only">{{__('admin/navigation.sr_only.app_title')}}</h1>

    {{--Menu (liens)--}}
    <nav class="lg:w-[18rem] admin relative flex justify-between lg:justify-stretch items-center pt-4 lg:flex-col lg:items-start lg:h-full lg:flex">
        <h2 class="sr-only">{{__('admin/navigation.sr_only.main_navigation')}}</h2>
        <a class="transition-transform duration-300 ease-in-out hover:scale-105 lg:hidden" href="{!! route('dashboard', ['locale' => app()->getLocale()]) !!}" title="{{__('admin/navigation.logos.dashboard_link_title')}}">
            <img width="50" height="40" src="{!! asset("assets/img/paws_logo.svg") !!}"
                 alt="{{__('admin/navigation.logos.mobile.alt')}}">
        </a>

        <a class="transition-transform duration-300 ease-in-out hover:scale-105 hidden lg:block pr-5" href="{!! route('dashboard', ['locale' => app()->getLocale()]) !!}" title="{{__('admin/navigation.logos.dashboard_link_title')}}">
            <img class="w-[20rem]" width="22" height="22" src="{!! asset("assets/img/full_logo_phone.svg") !!}" alt="{{__('admin/navigation.logos.desktop.alt')}}">
        </a>

        <x-admin.navigation.burger_menu/>

        <x-admin.navigation.nav_bar />

    </nav>
</header>
