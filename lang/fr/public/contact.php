<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Page "Contact"
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Formulaire de contact',

    /*
    |--------------------------------------------------------------------------
    | Section Contact
    |--------------------------------------------------------------------------
    */

    'section' => [
        'title' => 'Vous avez une question sur le refuge ?',
        'content' => 'Écrivez-nous un message pour qu’on puisse y répondre',
        'sub_title' => 'Nos coordonnées',

        'coords' => [
            'phone' => [
                'href' => 'tel:04 54 23 12 54 65',
                'title' => 'Appeler le numéro',
                'label' => '04 54 23 12 54 65',
            ],
            'email' => [
                'href' => 'mailto:contact@lespattesheureuses.be',
                'title' => 'Envoyer un mail',
                'label' => 'contact@lespattesheureuses.be',
            ],
            'address' => [
                'href' => 'https://www.google.com/maps/search/?api=1&query=12RuedesFleurs,69000Heusy,Belgique',
                'title' => 'Aller à l’adresse',
                'label' => '12 Rue des Fleurs, 69000 Heusy, Belgique',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Formulaire de contact
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Formulaire de contact',
        'sub_title' => 'Les champs * sont des champs requis',
        'fields' => [
            'name' => [
                'label' => 'Nom',
                'placeholder' => 'Smith',
            ],
            'first_name' => [
                'label' => 'Prénom',
                'placeholder' => 'Ambre',
            ],
            'email' => [
                'label' => 'Adresse mail',
                'placeholder' => 'ambre.smith@gmail.com',
            ],
            'object' => [
                'label' => 'Objet',
                'placeholder' => 'Votre objet',
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Votre message',
            ],
        ],
        'submit_label' => 'Envoyer le message',
    ],

];
