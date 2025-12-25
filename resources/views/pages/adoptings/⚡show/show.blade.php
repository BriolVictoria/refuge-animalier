<main class="w-full">
    <div>
        <div class="flex items-center gap-2 border-b border-blue-900">
            <a title="Voir les demande d‘adoption" href="{!! route('adoptings.index') !!}"
               class="py-4 px-8 text-xs text-blue-900 font-light md:text-lg ">Demandes d'adoption</a>
            <img src="{!! asset('assets/img/arrow_arianne.svg') !!}" class="w-4 h-4" alt="Image">
            <h1 class="py-4 px-8 text-sm text-blue-900 font-semibold md:text-xl">Fiche de {!! $adopting->first_name !!}</h1>
        </div>

        <x-admin.adoptings.show
            title_sronly="Fiche de {!! $adopting->first_name !!}"
            title1="{!! $adopting->first_name !!}"
        />
    </div>
</main>
