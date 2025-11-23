@props([
    'title',
    'buttons',
    'animals',
])

<section class="flex flex-col items-center gap-6 md:flex-row-reverse">
    <div class="flex flex-col gap-12">
        <h2 class="text-center text-xl font-medium">{!! $title !!}</h2>
        {{--Ajouter les boutons de recherche et de filtre--}}
        {{--Regarder pour la taille des boutons--}}

        <div class="flex flex-col gap-4 md:flex-row">
            @foreach($buttons as $button)
                <x-public.buttons.button
                    :route_name="$button['route_name']"
                    :title="$button['title']"
                    :label="$button['label']"
                    :class="$button['class']"/>
            @endforeach
        </div>

            @foreach($animals as $animal)
                <x-public.sections.card
                    :section_title="'Animal:'. $animal->name"
                    :image_path="asset('assets/img/image_animal.png')"
                    image_alt="Image d'un chien (un golden) couché sur de l'herbe"
                    :definitions="[
                        'name' => $animal->name,
                        'age' => $animal->age,
                        'breed' => $animal->breed,
                        'color' => $animal->coat,
                        'attitude' => $animal->attitude,
                        'statut' => $animal->state,
                    ]"
                    btn_url="#"
                    btn_title="Vers la fiche Pedro"
                    btn_label="Voir la fiche"
                    btn_class="border-blue-900 border-[0.09375rem] text-blue-900"
                />
            @endforeach



    </div>

</section>
