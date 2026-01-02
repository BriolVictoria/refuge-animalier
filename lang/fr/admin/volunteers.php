<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => 'Le bénévole a été supprimé avec succès !',
    'empty' => 'Aucun résultat trouvé pour votre recherche.',

    /* TABLEAU DES BÉNÉVOLES */
    'volunteers' => [
        'title_sronly' => 'Bénévoles',
        'title' => 'Bénévoles',
        'label' => '+ Ajouter un bénévole',
        'title_button' => '+ Ajouter un bénévole',
        'search_placeholder' => 'Rechercher un bénévole',
        'delete_message' => 'Supprimer la fiche de :name',
        'image_alt' => 'Icône d’une flêche pour le fil d’arianne',
    ],

    /* MODAL SUPPRESSION */
    'delete_modal' => [
        'title' => 'Voulez-vous supprimer ce bénévole ?',
        'description' => 'Cette action est définitive. La fiche de ce bénévole sera supprimée et ne pourra pas être récupérée.',
        'delete_button' => 'Supprimer la fiche',
        'cancel_button' => 'Annuler',
    ],

    /* FIL D’ARIANE / TITRES */
    'ariane' => [
        'volunteer_index' => "Voir tous les bénévoles",
        'volunteer_show' => "Fiche de :name",
        'volunteer_create' => "Ajouter un bénévole",
        'volunteer_edit' => "Modifier la fiche de :name",
    ],

    /* FORMULAIRE DE CRÉATION / ÉDITION */
    'form' => [
        'sections' => [
            'personal_info' => [
                'title' => 'Informations personnelles',
                'description' => 'Renseignez les informations personnelles du bénévole pour le contacter et gérer son profil.',
            ],
            'availabilities' => [
                'title' => 'Disponibilités',
                'description' => 'Indiquez les jours et créneaux où le bénévole est disponible pour participer aux activités.',
            ],
            'account' => [
                'title' => 'Création du compte',
                'description' => 'Définissez le mot de passe pour que le bénévole puisse accéder à son compte.',
            ],
        ],
        'fields' => [
            'last_name' => ['label' => 'Nom', 'placeholder' => 'Smith'],
            'first_name' => ['label' => 'Prénom', 'placeholder' => 'Ambre'],
            'email' => ['label' => 'Adresse email', 'placeholder' => 'ambre.smith@gmail.com'],
            'phone_number' => ['label' => 'Numéro de téléphone', 'placeholder' => '0450 78 96 87'],
            'adresse' => ['label' => 'Adresse', 'placeholder' => 'Rue des Lilas 50'],
            'town' => ['label' => 'Ville', 'placeholder' => 'Londres'],
            'postal_code' => ['label' => 'Code postal', 'placeholder' => '1234'],
            'password' => ['label' => 'Mot de passe du compte', 'placeholder' => '123456789'],
        ],
        'availabilities' => [
            'monday' => 'Lundi',
            'tuesday' => 'Mardi',
            'wednesday' => 'Mercredi',
            'thursday' => 'Jeudi',
            'friday' => 'Vendredi',
            'saturday' => 'Samedi',
            'sunday' => 'Dimanche',
            'not_available' => 'Pas disponible',
            'available_morning' => 'Disponible le matin',
            'available_evening' => 'Disponible le soir',
            'available_day' => 'Disponible toute la journée',
        ],
        'buttons' => [
            'create' => 'Créer la fiche du bénévole',
        ],
    ],

    /* FICHE DÉTAILLÉE D’UN BÉNÉVOLE */
    'show' => [
        'title_sronly' => 'Fiche détaillée du bénévole',
        'fields' => [
            'last_name' => 'Nom',
            'first_name' => 'Prénom',
            'email' => 'Email',
            'phone_number' => 'Numéro de téléphone',
            'adresse' => 'Adresse',
            'postal_code' => 'Code postal',
            'town' => 'Ville',
            'password' => 'Mot de passe',
        ],
        'buttons' => [
            'edit' => 'Modifier la fiche',
            'delete' => 'Supprimer la fiche',
            'back_to_list' => 'Retour à la liste des bénévoles',
        ],
    ],

    /* CHAMPS DU TABLEAU / MODAL */
    'fields' => [
        'last_name' => 'Nom',
        'first_name' => 'Prénom',
        'email' => 'Email',
        'phone_number' => 'Téléphone',
        'action' => 'Action',
    ],

    /* BOUTONS GÉNÉRAUX */
    'buttons' => [
        'delete' => 'Supprimer',
        'delete_fiche' => 'Supprimer la fiche de :name',
        'cancel' => 'Annuler',
        'add_volunteer' => '+ Ajouter un bénévole',
        'edit' => 'Modifier la fiche de :name',
        'view' => 'Voir la fiche de :name',
    ],

];
