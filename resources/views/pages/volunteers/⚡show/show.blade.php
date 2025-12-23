<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir tous les bénévoles" href="{!! route('volunteers.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">Bénévoles</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Fiche de {!! $volunteer->first_name !!}</h1>
        </div>

        <x-admin.volunteers.show
            title_sronly="Fiche de {!! $volunteer->first_name !!}"
            title1="{!! $volunteer->first_name !!}"
        />


    </div>
</main>
