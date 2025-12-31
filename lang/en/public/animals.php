<?php

return [

    /*
    |--------------------------------------------------------------------------
    | "Our Animals" Page
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Our Animals',

    'hero' => [
        'title' => 'Our Available Animals',
        'content' => 'Every day, new companions are waiting for a loving home. Discover our residents awaiting adoption and be touched by their stories.',
        'image_alt' => 'Photo of a very smiling dog placed in the center of a green circle',
        'button' => [
            'title' => 'Go to Our Animals page',
            'label' => 'Adopt now!',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Animal List Section
    |--------------------------------------------------------------------------
    */

    'list' => [
        'title' => 'Our Animals',
        'filter' => 'Filter',
        'search_placeholder' => 'Search for an animal',
    ],

    /*
    |--------------------------------------------------------------------------
    | Animal Card
    |--------------------------------------------------------------------------
    */

    'card' => [
        'see_profile' => 'View profile',
        'see_profile_title' => 'Go to :name\'s profile',
        'sr_only' => 'View the animal\'s profile',

        'fields' => [
            'age' => 'Age',
            'breed' => 'Breed',
            'coat' => 'Coat',
            'attitude' => 'Attitude',
            'status' => 'Status',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Animal Profile Page
    |--------------------------------------------------------------------------
    */

    'show' => [
        'page_name' => ':name\'s Page',
        'breadcrumb' => [
            'link' => 'Our Animals',
            'current' => 'Animal Profile',
            'arrow_alt' => 'Image of an arrow',
        ],

        'status_label' => 'Status',
        'information_title' => 'Additional Information',
        'images_title' => 'Additional Images',
        'images_content' => 'We have added several photos so you can feel all their gentleness and unique charm. Each image shows a small part of their personality.',

        'fields' => [
            'name' => 'Name',
            'age' => 'Age',
            'breed' => 'Breed',
            'coat' => 'Coat',
            'attitude' => 'Attitude',
        ],

        'info_parts' => [
            'character' => 'Character:',
            'character_content' => 'Calm and cuddly, affectionate with children, enjoys resting in the sun, a bit shy at first, but quickly very affectionate.',
            'shelter_note' => 'Shelter note:',
            'shelter_note_content' => 'Sol is a real ball of tenderness. She is eagerly waiting for a family who will offer her love and care.',
        ],

        'buttons' => [
            'back_to_animals' => [
                'title' => 'Back to animals',
                'label' => 'Back to animals',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Adoption Form
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Do you want to adopt :name?',
        'form_title' => 'Adoption request form for :name',
        'form_sub_title' => 'Fields marked with * are required',
        'fields' => [
            'name' => 'Last Name',
            'first_name' => 'First Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
            'animal' => 'Animal Name',
        ],
        'submit_label' => 'Submit adoption request',
    ],

    'animal_alt' => 'Image of :name',

];
