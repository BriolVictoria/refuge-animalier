<?php

return [

    /*
    |--------------------------------------------------------------------------
    | "Volunteer Application" Page
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Volunteer Application Form',

    /*
    |--------------------------------------------------------------------------
    | Form and Contact Section
    |--------------------------------------------------------------------------
    */

    'contact_section' => [
        'title' => 'Want to help us ?',
        'content' => 'Submit your application to become a volunteer and contribute to the well-being of our animals.',
        'sub_title' => 'Our Contact Details',
        'coords' => [
            'phone' => [
                'href' => 'tel:04 54 23 12 54 65',
                'title' => 'Call this number',
                'label' => '04 54 23 12 54 65',
            ],
            'email' => [
                'href' => 'mailto:contact@lespattesheureuses.be',
                'title' => 'Send an email',
                'label' => 'contact@lespattesheureuses.be',
            ],
            'address' => [
                'href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique',
                'title' => 'Go to the address',
                'label' => '12 Rue des Fleurs, 69000 Heusy, Belgium',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Volunteer Form
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Volunteer Application Form',
        'sub_title' => 'Fields marked with * are required',
        'fields' => [
            'name' => [
                'label' => 'Last Name',
                'placeholder' => 'Smith',
            ],
            'first_name' => [
                'label' => 'First Name',
                'placeholder' => 'Ambre',
            ],
            'email' => [
                'label' => 'Email Address',
                'placeholder' => 'ambre.smith@gmail.com',
            ],
            'phone' => [
                'label' => 'Phone Number',
                'placeholder' => '+32 4 56 12 76 32 45',
            ],
            'address' => [
                'label' => 'Full Address',
                'placeholder' => 'Rue des Lilas, Argentine, 3234 No.132',
            ],
            'message' => [
                'label' => 'Why become a volunteer ?',
                'placeholder' => 'Your message',
            ],
        ],
        'submit' => 'Submit Application',
    ],

];
