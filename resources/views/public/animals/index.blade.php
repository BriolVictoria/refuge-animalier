<x-public.app title="Nos animaux">

    <main>
        <x-public.sections.text-media
            class="bg-green-50"
            :image_path="asset('assets/img/animalspage_picture.png')"
            image_alt="Photo d’un chien qui souris beaucoup placé au centre d’un cercle vert"
            title="Nos animaux disponible"
            content="Chaque jour, de nouveaux compagnons attendent un foyer aimant.Découvrez nos pensionnaires en attente d’adoption et laissez-vous toucher par leur histoire."
            :have_button="true"
            btn_url="{!! route('public.animals.index') !!}"
            btn_title="Vers la page Nos animaux"
            btn_label="Adopté maintenant&nbsp;!"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.section-animals-card
            title="Nos animaux"
            :animals="$animals"
            btn_url="{!! route('public.animals.index') !!}"
            btn_title="Filtrer"
            btn_label="Filtrer"
            btn_class="border-blue-900 border-[0.09375rem] text-blue-900 transition-transform duration-300 hover:scale-105"
        />

    </main>
    <div class="px-11.5">
        {{ $animals->links() }}
    </div>

</x-public.app>
