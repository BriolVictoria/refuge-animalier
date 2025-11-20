@php
    $buttons =[
       ['route_name'=>'#', 'title'=> 'Vers Nos animaux', 'label' => 'Adopter maintenant !', 'class' => 'bg-blue-900 text-white'],
       ['route_name'=>'#', 'title'=> 'Vers Contactez-nous', 'label' => 'Contactez-nous', 'class' => 'border-blue-900 border-[0.09375rem] text-blue-900'],
    ];

    /*$definitions =[
       ['title' => 'Nom:', 'content' => 'Pedro'],
       ['title' => 'Age:', 'content' => '6 mois'],
       ['title' => 'Race:', 'content' => 'Golden'],
       ['title' => 'Pelage:', 'content' => 'Beige'],
       ['title' => 'Date:', 'content' => '21/12/24'],
       ['title' => 'Attitude:', 'content' => 'Calme'],
    ];*/
/*VOIR COMMENT FAIRE POUR RECUPERER LES DEF*/
@endphp

<x-public.app title="Page d'accueil A TRADUIRE">
    <main>
        <x-public.sections.homepage-hero
            :image_path="asset('assets/img/homepage_picture.png')"
            image_alt="Image d'un golden qui souris beaucoup sur un fond rond vert"
            sub_title="Le refuge"
            title="LES PATTES HEUREUSES"
            content="Chaque patte mérite un foyer aimant. Découvrez nos compagnons à quatre pattes et offrez-leur une nouvelle vie pleine de câlins et d’aventures&nbsp;!"
            :buttons="$buttons"
        />

        <x-public.sections.text-media
            :image_path="asset('assets/img/dog_rabbit.png')"
            image_alt="Fonds superposés colorées&nbsp;, chacun ayant alternativement un lapin et un chien&nbsp;, créant un effet de superposition&nbsp;."
            title="À propos de nous"
            content="Depuis 2010&nbsp;, Les Pattes Heureuses accueillent&nbsp;, soignent et trouvent un foyer aimant pour chaque
            animal&nbsp;. Chaque patte mérite amour&nbsp;, sécurité et soins&nbsp;, et notre équipe s’engage avec passion pour
            leur bien-être&nbsp;. Chaque jour&nbsp;, nous transformons la vie des animaux en attente d’adoption grâce à
            l’attention&nbsp;, l’amour et le dévouement&nbsp;, tout en sensibilisant le public à leur importance et à leur
            bien-être&nbsp;."
            :have_button="true"
            btn_url="#"
            btn_title="Vers la page à propos"
            btn_label="Nous découvrir"
            btn_class="bg-blue-900 text-white self-start"
        />

        <x-public.sections.section-card
            title="Nos animaux"
            content="Découvrez nos compagnons en quête d’un foyer aimant&nbsp;. Chaque animal a sa personnalité et attend de rencontrer sa famille pour la vie&nbsp;."
            btn_url="#"
            btn_title="Vers la page Nos animaux"
            btn_label="Voir les animaux"
            btn_class="bg-blue-900 text-white self-start"
        />

        {{--CHANGER LE ALT--}}
        <x-public.sections.text-media
            :image_path="asset('assets/img/volunteer_image.png')"
            image_alt="Fonds superposés colorées&nbsp;, chacun ayant alternativement un lapin et un chien&nbsp;, créant un effet de superposition&nbsp;."
            title="Comment nous aider&nbsp;?"
            content="Envie de faire la différence&nbsp;? Rejoignez notre équipe de bénévoles et offrez temps et amour à nos compagnons à quatre pattes&nbsp;. Chaque petit geste compte et transforme leur vie&nbsp;! Aidez-nous à leur offrir un foyer heureux et une vie meilleure&nbsp;."
            :have_button="true"
            btn_url="#"
            btn_title="Vers la page Devenir bénévole"
            btn_label="Devenir bénévole"
            btn_class="bg-blue-900 text-white self-start"
        />

    </main>
</x-public.app>
