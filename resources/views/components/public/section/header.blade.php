<header class="bg-white shadow-xl">
    <h1 class="sr-only">Les pattes heureuses</h1>

    {{--Menu (liens)--}}
    <nav class="relative flex justify-between items-center  pl-[1.135rem] pr-[1.135rem] pt-[1rem] pb-[0.625rem]">
        <h2 class="sr-only">Navigation principale</h2>
        <a href="{!! route('public.homepage') !!}" title="Vers la page d'accueil">
            <img width="50" height="40" src="{!! asset("assets/img/paws_logo.svg") !!}"
                 alt="Logo représentant une empreinte de patte verte">
        </a>

        <x-public.navigation.burger_menu/>

        <x-public.navigation.navigation_links/>

    </nav>
</header>
