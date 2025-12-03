<x-public.app title="Notre refuge">
<main>
    <x-public.sections.text-media
        class="bg-green-50"
        :image_path="asset('assets/img/aboutpage_picture.png')"
        image_alt="Photo d’un chat placé au centre d’un cercle vert"
        title="Notre histoire"
        content="Depuis 2010, Les Pattes Heureuses œuvrent pour offrir une seconde chance aux animaux abandonnés, perdus ou maltraités. Fondé par Élise Martin, le refuge a commencé modestement avec une dizaine d’animaux et quelques bénévoles passionnés.Aujourd’hui, notre équipe accueille chaque année des dizaines de chiens et chats dans l’espoir de leur trouver un foyer aimant."
        :have_button="true"
        btn_url="{!! route('public.contactpage') !!}"
        btn_title="Vers la page Contact"
        btn_label="Contactez-nous"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/mission_image.png')"
        image_alt="Photo de personnes organisant un événement sur un fond bleu"
        title="Notre mission"
        content="Apporter soins, sécurité et amour à chaque animal dans le besoin. Nous croyons que chaque patte mérite d’être heureuse. Notre mission est d’offrir un hébergement temporaire, des soins adaptés et de trouver une famille aimante pour chacun. Nous travaillons aussi à sensibiliser le public au respect des animaux et à l’importance de l’adoption responsable."
        :have_button="true"
        btn_url="{!! route('public.animals.index') !!}"
        btn_title="Vers la page Voir les animaux"
        btn_label="Voir les animaux"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

    <x-public.sections.section_card_skills
        title="Nos valeurs"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/team_image.png')"
        image_alt="Photo d’une équipe en train d’organiser une activité sur un fond bleu"
        title="Notre équipe"
        content="Les Pattes Heureuses, c’est avant tout une famille de bénévoles dévoués&nbsp;: vétérinaires, soigneurs, familles d’accueil et amoureux des animaux.
Ensemble, nous veillons à offrir à chaque compagnon les meilleurs soins et beaucoup d’amour.
“Ce n’est pas un travail, c’est une passion partagée.” – Élise, fondatrice du refuge."
        :have_button="false"
    />

    <x-public.sections.text-media
        :image_path="asset('assets/img/volunteer_image_about.png')"
        image_alt="Image d’un arbre avec des mains colorées dessus sur un fond vert"
        title="Comment nous aider&nbsp;?"
        content="Adopter un animal et lui offrir un foyer pour la vie. Devenir bénévole pour nous prêter main-forte. Faire un don pour nous aider à couvrir les frais de soins."
        :have_button="true"
        btn_url="{!! route('public.volunteerpage') !!}"
        btn_title="Vers la page Devenir bénévole"
        btn_label="Devenir bénévole"
        btn_class="bg-blue-900 text-white self-start transition-transform duration-300 hover:scale-105"
    />

</main>

</x-public.app>
