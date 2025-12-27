<main class="w-full">
    <x-admin.animals.index.table
        title_sronly="Animaux"
        title="Animaux"
        label="+ Ajouter un animal"
        title_button="+ Ajouter un animal"
        route_name="{!! route('animals.create') !!}"
        class="bg-blue-900 self-start text-white transition-transform duration-300 hover:scale-101 hover:bg-blue-600 inline-block"
        search_placeholder="Rechercher un animal"
    />

</main>
