<?php

return [

    /* TITRES GÉNÉRAUX */
    'page' => [
        'title' => 'Profil',
        'sr_only' => 'Profil',
    ],

    /* INFORMATIONS GÉNÉRALES */
    'information' => [
        'title' => 'Informations générales',
        'description' => 'Consultez et mettez à jour vos informations personnelles afin que votre profil soit toujours à jour.',

        'avatar' => [
            'preview_alt' => "Aperçu de l'image",
            'current_alt' => 'Avatar actuel',
            'edit_button' => "Modifier l'image",
        ],

        'fields' => [
            'name' => [
                'label' => 'Nom complet',
                'placeholder' => 'John Doe',
            ],
            'email' => [
                'label' => 'Adresse mail',
                'placeholder' => 'john.doe@gmail.com',
            ],
            'phone' => [
                'label' => 'Téléphone',
                'placeholder' => '04/70 54 23 54 12',
            ],
            'role' => [
                'label' => 'Rôle',
            ],
            'creation_date' => [
                'label' => "Date d'inscription",
                'placeholder' => '12/12/2025',
            ],
        ],
    ],

    /* SÉCURITÉ / MOT DE PASSE */
    'security' => [
        'title' => 'Sécurité du compte',

        'fields' => [
            'current_password' => 'Mot de passe actuel',
            'new_password' => 'Nouveau mot de passe',
            'confirm_password' => 'Confirmation du nouveau mot de passe',
        ],

        'button' => [
            'label' => 'Confirmer la modification de mot de passe',
            'title' => 'Confirmer la modification de mot de passe',
        ],
    ],

    /* NOTIFICATIONS */
    'notifications' => [
        'title' => 'Préférences de notifications',

        'items' => [
            'email' => 'Notifications par email',
            'dashboard' => 'Notifications tableau de bord',
            'urgent_adoption' => 'Alertes adoption urgentes',
            'appointment' => 'Rappel de RDV',
        ],
    ],

    /* BOUTONS */
    'buttons' => [
        'save' => 'Enregistrer les modifications',
        'save_title' => 'Enregistrer les modifications',
    ],

];
