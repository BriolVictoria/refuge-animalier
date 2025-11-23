<x-public.app title="Nos animaux">

    <main>
        <x-public.sections.text-media
            class="bg-green-50"
            :image_path="asset('assets/img/animalspage_picture.png')"
            image_alt="Photo d’un chien qui souris beaucoup placé au centre d’un cercle vert"
            title="Nos animaux disponible"
            content="Chaque jour, de nouveaux compagnons attendent un foyer aimant.Découvrez nos pensionnaires en attente d’adoption et laissez-vous toucher par leur histoire."
            :have_button="true"
            btn_url="#"
            btn_title="Vers la page Adopté"
            btn_label="Adopté maintenant&nbsp;!"
            btn_class="bg-blue-900 text-white"
        />

        <x-public.sections.section-animals-card
        title="Nos animaux"
        :animals="$animals"
        btn_url="#"
        btn_title="Filtrer"
        btn_label="Filtrer"
        btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
        />

    </main>
    {{ $animals->links() }}

</x-public.app>
