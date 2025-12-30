<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Page "Nos animaux"
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Nos animaux',

    'hero' => [
        'title' => 'Nos animaux disponibles',
        'content' => 'Chaque jour, de nouveaux compagnons attendent un foyer aimant. Découvrez nos pensionnaires en attente d’adoption et laissez-vous toucher par leur histoire.',
        'image_alt' => 'Photo d’un chien qui sourit beaucoup placé au centre d’un cercle vert',
        'button' => [
            'title' => 'Vers la page Nos animaux',
            'label' => 'Adoptez maintenant !',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Section liste des animaux
    |--------------------------------------------------------------------------
    */

    'list' => [
        'title' => 'Nos animaux',
        'filter' => 'Filtrer',
        'search_placeholder' => 'Rechercher un animal',
    ],

    /*
    |--------------------------------------------------------------------------
    | Carte animal
    |--------------------------------------------------------------------------
    */

    'card' => [
        'see_profile' => 'Voir la fiche',
        'see_profile_title' => 'Vers la fiche :name',
        'sr_only' => 'Voir la fiche de l’animal',

        'fields' => [
            'age' => 'Âge',
            'breed' => 'Race',
            'coat' => 'Pelage',
            'attitude' => 'Attitude',
            'status' => 'Statut',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Page fiche animal
    |--------------------------------------------------------------------------
    */

    'show' => [
        'page_name' => 'Page de :name',
        'breadcrumb' => [
            'link' => 'Nos animaux',
            'current' => 'Fiche de l’animal',
            'arrow_alt' => 'Image d’une flèche',
        ],

        'status_label' => 'Statut',
        'information_title' => 'Informations supplémentaires',
        'images_title' => 'Images supplémentaires',
        'images_content' => 'Nous avons ajouté plusieurs photos pour que vous puissiez ressentir toute sa douceur et son charme unique. Chaque image montre un petit bout de sa personnalité.',

        'fields' => [
            'name' => 'Nom',
            'age' => 'Âge',
            'breed' => 'Race',
            'coat' => 'Pelage',
            'attitude' => 'Attitude',
        ],

        'info_parts' => [
            'character' => 'Caractère :',
            'character_content' => 'Calme et câline, affectueuse avec les enfants, aime les moments de repos au soleil, un peu timide au début, mais vite très attachante.',
            'shelter_note' => 'Petit mot du refuge :',
            'shelter_note_content' => 'Sol est une vraie boule de tendresse. Elle attend avec impatience une famille qui saura lui offrir amour et douceur.',
        ],

        'buttons' => [
            'back_to_animals' => [
                'title' => 'Retour aux animaux',
                'label' => 'Retour aux animaux',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Formulaire d’adoption
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Voulez-vous adopter :name ?',
        'form_title' => 'Formulaire de demande d’adoption pour :name',
        'form_sub_title' => 'Les champs * sont des champs requis',
        'fields' => [
            'name' => 'Nom',
            'first_name' => 'Prénom',
            'email' => 'Adresse mail',
            'phone' => 'Numéro de téléphone',
            'animal' => 'Nom de l’animal',
        ],
        'submit_label' => 'Envoyer la demande d’adoption',
    ],

];
