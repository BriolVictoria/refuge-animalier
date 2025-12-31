<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Page "Demande de bénévolat"
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Formulaire de demande de bénévolat',

    /*
    |--------------------------------------------------------------------------
    | Section formulaire et coordonnées
    |--------------------------------------------------------------------------
    */

    'contact_section' => [
        'title' => 'Envie de nous aider ?',
        'content' => 'Faites votre demande pour devenir bénévole et contribuer au bien-être de nos animaux.',
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
    | Formulaire de bénévolat
    |--------------------------------------------------------------------------
    */

    'form' => [
        'title' => 'Formulaire de demande de bénévolat',
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
            'phone' => [
                'label' => 'Numéro de téléphone',
                'placeholder' => '+32 4 56 12 76 32 45',
            ],
            'address' => [
                'label' => 'Adresse complète',
                'placeholder' => 'Rue des Lilas, Argentine, 3234 n°132',
            ],
            'message' => [
                'label' => 'Pourquoi devenir bénévole ?',
                'placeholder' => 'Votre message',
            ],
        ],
        'submit' => 'Envoyer la demande',
    ],

];
