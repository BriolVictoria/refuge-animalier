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
            'label' => 'Adopt now !',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | AnimalEnum List Section
    |--------------------------------------------------------------------------
    */

    'list' => [
        'title' => 'Our Animals',
        'filter' => 'Filter',
        'search_placeholder' => 'Search for an animal',
    ],

    /*
    |--------------------------------------------------------------------------
    | AnimalEnum Card
    |--------------------------------------------------------------------------
    */

    'card' => [
        'see_profile' => 'View profile',
        'see_profile_title' => 'Go to :name’s profile',
        'sr_only' => 'View the animal’s profile',

        'fields' => [
            'age' => 'Age',
            'breed' => 'Type',
            'coat' => 'Coat',
            'attitude' => 'Attitude',
            'status' => 'Status',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | AnimalEnum Profile Page
    |--------------------------------------------------------------------------
    */

    'show' => [
        'page_name' => ':name’s Page',
        'breadcrumb' => [
            'link' => 'Our Animals',
            'current' => 'AnimalEnum Profile',
            'arrow_alt' => 'Image of an arrow',
        ],

        'status_label' => 'Status',
        'information_title' => 'Additional Information',
        'images_title' => 'Additional Images',
        'images_content' => 'We have added several photos so you can feel all their gentleness and unique charm. Each image shows a small part of their personality.',

        'fields' => [
            'name' => 'Name',
            'age' => 'Age',
            'breed' => 'Type',
            'coat' => 'Coat',
            'attitude' => 'Attitude',
        ],

        'info_parts' => [
            'character' => 'Character:',
            'character_content' => 'The shelter animals are curious and playful, while remaining gentle and sociable. They enjoy the company of humans and other animals, but also like to rest quietly. With a little patience and attention, they can become very affectionate and form a strong bond with their future family.',
            'shelter_note' => 'A note from the shelter:',
            'shelter_note_content' => 'The shelter animals are real bundles of affection. They are eagerly waiting for a family that will give them love, care, and kindness.',
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
        'title' => 'Do you want to adopt :name ?',
        'form_title' => 'Adoption request form for :name',
        'form_sub_title' => 'Fields marked with * are required',
        'fields' => [
            'name' => 'Last Name',
            'first_name' => 'First Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
            'city' => 'City',
            'postal_code' => 'Postal code',
            'address' => 'Full address',
            'message' => 'Your message',
            'animal' => 'AnimalEnum Name',
        ],
        'submit_label' => 'Submit adoption request',
    ],

    'animal_alt' => 'Image of :name',
    'animal_none' => 'No animals were found for your search',
    'animal_none_img' => 'No photos of :name',

];
