<main class="w-full">
    <x-admin.volunteers.index.table
        :volunteers="$this->volunteers"
        title_sronly="Bénévoles"
        title="Bénévoles"
        label="+ Ajouter un bénévole"
        title_button="+ Ajouter un bénévole"
        route_name="{!! route('volunteers.create') !!}"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="Rechercher un bénévole"

    />

</main>
