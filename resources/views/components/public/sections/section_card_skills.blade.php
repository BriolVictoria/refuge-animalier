@props([
    'title',
])

<section class="flex flex-col items-center gap-6">
    <h2 class="text-center text-xl font-medium">
        {!! $title !!}
    </h2>


    <x-public.sections.card_skills
        :image_path="asset('assets/img/responsability_icon.svg')"
        image_alt="Icône d’une balance dessinée en trait vert"
        title="Responsabilité"
        content="Nous plaçons chaque animal dans un foyer adapté à ses besoins."
    />

    <x-public.sections.card_skills
        :image_path="asset('assets/img/compassion_icon.svg')"
        image_alt="Icône d’un poing fermé dessiné en trait vert"
        title="Compassion"
        content="Nous plaçons chaque animal dans un foyer adapté à ses besoins."
    />

    <x-public.sections.card_skills
        :image_path="asset('assets/img/engagement_logo.svg')"
        image_alt="Icône d’un bouclier dessinée en trait vert"
        title="Engagement"
        content="Nous plaçons chaque animal dans un foyer adapté à ses besoins."
    />

</section>
