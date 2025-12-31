<?php

return [

    /*
    |--------------------------------------------------------------------------
    | "Contact" Page
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Contact Form',

    /*
    |--------------------------------------------------------------------------
    | Contact Section
    |--------------------------------------------------------------------------
    */

    'section' => [
        'title' => 'Do you have a question about the shelter ?',
        'content' => 'Write us a message so we can respond',
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
    | Contact Form
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Contact Form',
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
            'object' => [
                'label' => 'Subject',
                'placeholder' => 'Your subject',
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Your message',
            ],
        ],
        'submit_label' => 'Send Message',
    ],

];
