<header class="relative bg-white shadow-[var(--shadow-xl)] px-[1.25rem] z-10  lg:px-[6.25rem]">
    <h1 class="sr-only">Les pattes heureuses</h1>

    {{--Menu (liens)--}}
    <nav class="relative flex justify-between items-center pt-4 pb-2.5">
        <h2 class="sr-only">Navigation principale</h2>
        <a class="transition-transform duration-300 ease-in-out hover:scale-105 min-[1130px]:hidden" href="{!! route('public.homepage') !!}" title="Vers la page Accueil">
            <img width="50" height="40" src="{!! asset("assets/img/paws_logo.svg") !!}"
                 alt="Logo représentant une empreinte de patte verte">
        </a>

        <a class="transition-transform duration-300 ease-in-out hover:scale-105 hidden min-[1130px]:block pr-5" href="{!! route('public.homepage') !!}" title="Vers la page Accueil">
            <img class="w-[20rem]" src="{!! asset("assets/img/full_logo_phone.svg") !!}" alt="Logo Les Pattes Heureuses avec deux pattes vertes au dessus du texte">
        </a>

        <x-public.navigation.burger_menu/>

        <x-public.navigation.navigation_links/>

    </nav>
</header>
