@props([
    'title',
])

<section class="flex flex-col items-center gap-6 md:grid md:grid-cols-9 2xl:grid-cols-12">
    <h2 class="text-center text-xl font-medium md:col-start-4 md:col-end-7 2xl:col-start-6 2xl:col-end-8">
        {!! $title !!}
    </h2>

    <div class="flex flex-col gap-6 md:flex md:flex-row md:col-start-1 md:col-end-10 md:row-start-2 md:gap-6 2xl:col-start-2 2xl:col-end-12">
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
    </div>


</section>
