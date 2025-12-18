<main class="w-full">

    <x-admin.adoptings.index.table
        :adoptings="$this->adoptings"
        title_sronly="Demandes d'adoptions"
        title="Demandes d'adoptions"
        label="+ Ajouter une demande d'adoption"
        title_button="+ Ajouter une demande d'adoption"
        route_name="{!! route('adoptings.create') !!}"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="Rechercher une demande"
    />

</main>
