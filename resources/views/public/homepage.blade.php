@php
    $buttons =[
       ['route_name'=>route('public.animals.index'), 'title'=> 'Vers Nos animaux', 'label' => 'Adopter maintenant&nbsp;!', 'class' => 'bg-blue-900 text-white transition-transform duration-300 hover:scale-105'],
       ['route_name'=>route('public.contactpage'), 'title'=> 'Vers Contactez-nous', 'label' => 'Contactez-nous', 'class' => 'border-blue-900 border-[0.09375rem] text-blue-900 transition-transform duration-300 hover:scale-105'],
    ];
@endphp

<x-public.app title="Page d'accueil">
    <main>
        <x-public.sections.homepage-hero
            :image_path="asset('assets/img/imagetestcomputer.svg')"
            image_alt="Image d'un golden qui souris beaucoup avec fond vert."
            sub_title="Le refuge"
            title="LES PATTES HEUREUSES"
            content="Chaque patte mérite un foyer aimant. Découvrez nos compagnons à quatre pattes et offrez-leur une nouvelle vie pleine de câlins et d’aventures&nbsp;!"
            :buttons="$buttons"
        />

        <x-public.sections.text-media
            :image_path="asset('assets/img/dog_rabbit.png')"
            image_alt="Fonds superposés colorées,chacun ayant alternativement un lapin et un chien,créant un effet de superposition."
            title="À propos de nous"
            content="Depuis 2010, Les Pattes Heureuses accueillent, soignent et trouvent un foyer aimant pour chaque
            animal.Chaque patte mérite amour,sécurité et soins,et notre équipe s’engage avec passion pour
            leur bien-être. Chaque jour, nous transformons la vie des animaux en attente d’adoption grâce à
            l’attention, l’amour et le dévouement, tout en sensibilisant le public à leur importance et à leur
            bien-être."
            :have_button="true"
            btn_url="{!! route('public.aboutpage') !!}"
            btn_title="Vers la page Le refuge"
            btn_label="Voir le refuge"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.section-card
            title="Nos animaux"
            content="Découvrez nos compagnons en quête d’un foyer aimant. Chaque animal a sa personnalité et attend de rencontrer sa famille pour la vie."
            :animals="$animals"
            btn_url="{!! route('public.animals.index') !!}"
            btn_title="Vers la page Nos animaux"
            btn_label="Voir les animaux"
            btn_class="bg-blue-900 text-white self-center md:col-start-4 md:col-end- 2xl:col-start-6 2xl:col-end-8 transition-transform duration-300 hover:scale-105"
        />

        <x-public.sections.text-media
            :image_path="asset('assets/img/volunteer_image.png')"
            image_alt="Image d’un arbre avec des mains colorées dessus sur un fond bleu"
            title="Comment nous aider&nbsp;?"
            content="Envie de faire la différence&nbsp;? Rejoignez notre équipe de bénévoles et offrez temps et amour à nos compagnons à quatre pattes. Chaque petit geste compte et transforme leur vie&nbsp;! Aidez-nous à leur offrir un foyer heureux et une vie meilleure."
            :have_button="true"
            btn_url="{!! route('public.volunteerpage') !!}"
            btn_title="Vers la page Devenir bénévole"
            btn_label="Devenir bénévole"
            btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
        />

    </main>
</x-public.app>
