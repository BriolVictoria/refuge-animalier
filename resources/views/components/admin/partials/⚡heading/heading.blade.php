<header class="relative bg-white shadow-[var(--shadow-xl)] px-[1.25rem] z-10 lg:flex lg:flex-col lg:h-screen  lg:top-0 lg:sticky ">
    <h1 class="sr-only">Les pattes heureuses</h1>

    {{--Menu (liens)--}}
    <nav class="lg:w-[18rem] admin relative flex justify-between lg:justify-stretch items-center pt-4 lg:flex-col lg:items-start lg:h-full lg:flex">
        <h2 class="sr-only">Navigation principale</h2>
        <a class="transition-transform duration-300 ease-in-out hover:scale-105 lg:hidden" href="#" title="Vers le Tableau de bord">
            <img width="50" height="40" src="{!! asset("assets/img/paws_logo.svg") !!}"
                 alt="Logo représentant une empreinte de patte verte">
        </a>

        <a class="transition-transform duration-300 ease-in-out hover:scale-105 hidden lg:block pr-5" href="#" title="Vers le Tableau de bord">
            <img class="w-[20rem]" src="{!! asset("assets/img/full_logo_phone.svg") !!}" alt="Logo Les Pattes Heureuses avec deux pattes vertes au dessus du texte">
        </a>

        <x-admin.navigation.burger_menu/>

        <x-admin.navigation.nav_bar />

    </nav>
</header>
