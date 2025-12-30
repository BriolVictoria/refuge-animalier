<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => 'La demande a été supprimée avec succès !',
    'empty' => 'Aucun résultat trouvé pour votre recherche.',

    /* TABLE ADOPTIONS */
    'adoptings' => [
        'title_sronly' => 'Demandes d’adoptions',
        'title' => 'Demandes d’adoptions',
        'add_label' => '+ Ajouter une demande d’adoption',
        'add_button' => '+ Ajouter une demande d’adoption',
        'search_placeholder' => 'Rechercher une demande',
        'title_edit' => 'Rechercher une demande',
    ],

    /* MODAL SUPPRESSION */
    'delete_modal' => [
        'title' => 'Voulez-vous supprimer la demande ?',
        'description' => 'Cette action est définitive. La fiche de cette demande sera supprimée et ne pourra pas être récupérée.',
        'delete_button' => 'Supprimer la fiche',
        'cancel_button' => 'Annuler',
    ],

    /* BOUTONS */
    'buttons' => [
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
        'edit_record' => 'Modifier la fiche',
    ],

    /* CHAMPS */
    'fields' => [
        'last_name' => "Nom de l'adoptant",
        'first_name' => "Prénom de l'adoptant",
        'email' => "Adresse mail",
        'animal_name' => "Nom de l'animal désiré",
        'phone_number' => "Numéro de téléphone",
        'address' => "Adresse",
        'city' => "Ville",
        'postcode' => "Code postal",
        'other_animal' => "D'autres animaux à la maison",
        'children' => "Présence d'enfants",
        'environment' => "Type d'environnement",
        'outside' => "Espace extérieur",
        'creation_date' => "Date de la demande",
        'state' => "Statut",
        'comment' => "Commentaire interne (réservé au personnel)",
        'selected_animal' => "Animal désiré",
        'actions' => "Actions",
    ],

    /* PLACEHODLER */
    'placeholder' => [
        'address' => 'Rue des Lilas',
        'city' => 'Londres',
        'comment' => 'Commentaire',
    ],

    /* ACTIONS */
    'actions' => [
        'view' => "Voir la fiche de :name",
        'edit' => "Modifier la fiche de :name",
        'delete' => "Supprimer la fiche de :name",
        'save' => 'Enregistrer la demande',
    ],

    /* ETATS POSSIBLES */
    'states' => [
        'pending' => 'En attente',
        'done' => 'Terminée',
        'in_progress' => 'En cours',
    ],

    /* FIL D’ARIANE / TITRES */
    'ariane' => [
        'adoptings_index' => "Voir les demandes d'adoption",
        'adopting_show' => "Fiche de :name",
        'adopting_create' => "Ajouter une demande",
    ],

    /* BOUTONS SUR LA PAGE CREATE / SHOW */
    'buttons_show' => [
        'edit' => 'Modifier la fiche',
        'save' => 'Enregistrer la demande',
    ],

    /* LABELS RADIO / SELECT */
    'options' => [
        'yes' => 'Oui',
        'no' => 'Non',
        'environments' => [
            'Flat' => 'Appartement',
            'FlatShare' => 'Colocation',
            'House' => 'Maison',
            'Studio' => 'Studio',
            'Other' => 'Autre',
        ],
        'states' => [
            'En attente' => 'En attente',
            'En cours' => 'En cours',
            'Terminée' => 'Terminée',
        ],
    ],

    /* TITRES ET CONTENUS DES INFORMATIONS VOLUNTEER */
    'volunteer_sections' => [
        'personal_info' => [
            'title' => "Informations sur l‘adoptant",
            'content' => "Renseignez les informations personnelles de l'adoptant pour le contacter et suivre sa demande.",
        ],
        'desired_animal' => [
            'title' => "Animal désiré",
            'content' => "Sélectionnez l'animal que l'adoptant souhaite accueillir.",
        ],
        'living_environment' => [
            'title' => "Environnement de vie",
            'content' => "Indiquez le cadre de vie de l'adoptant pour assurer le bien-être de l'animal.",
        ],
        'other_info' => [
            'title' => "Autres informations",
            'content' => "Ajoutez des informations complémentaires concernant la demande ou des notes internes.",
        ],
    ],

];
