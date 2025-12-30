<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => "L'animal a été supprimé avec succès !",
    'note_success_message' => "La note a été supprimée avec succès !",
    'empty' => 'Aucun résultat trouvé pour votre recherche.',
    'empty_notes' => "Cet animal n'a pas de note",

    /* TABLE ANIMAUX */
    'animals' => [
        'title_sronly' => 'Animaux',
        'title' => 'Animaux',
        'add_label' => '+ Ajouter un animal',
        'add_button' => '+ Ajouter un animal',
        'search_placeholder' => 'Rechercher un animal',
    ],

    /* MODAL SUPPRESSION */
    'delete_modal' => [
        'animal' => [
            'title' => 'Voulez-vous supprimer l’animal ?',
            'description' => "Cette action est définitive. La fiche de cet animal sera supprimée et ne pourra pas être récupérée.",
            'delete_button' => 'Supprimer la fiche',
            'cancel_button' => 'Annuler',
        ],
        'note' => [
            'title' => 'Voulez-vous supprimer la note ?',
            'description' => "Cette action est définitive. La note sera supprimée et ne pourra pas être récupérée.",
            'delete_button' => 'Supprimer la note',
            'cancel_button' => 'Annuler',
        ],
    ],

    /* BOUTONS */
    'buttons' => [
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
        'edit_record' => 'Modifier la fiche',
        'create_note' => 'Créer la note',
        'edit_note' => 'Modifier la note',
        'add_visit_note' => 'Ajouter une note de visite',
        'create_animal' => "Créer la fiche de l’animal",
        'edit_animal' => "Modifier la fiche de l’animal",
    ],

    /* CHAMPS */
    'fields' => [
        'photo' => "Images de l’animal",
        'name' => "Nom",
        'type' => "Type",
        'age' => "Âge",
        'sex' => "Sexe",
        'breed' => "Race",
        'coat' => "Pelage",
        'vaccine' => "Vaccin",
        'state' => "Statut",
        'attitude' => "Caractéristique",
        'updated_at' => "Mise à jour",
        'actions' => "Actions",
        'email' => "Email",
        'note' => "Note",
        'date' => "Date de mise à jour",
    ],

    /* PLACEHOLDERS */
    'placeholder' => [
        'search' => 'Rechercher un animal',
        'email' => 'ambre.smith@gmail.com',
        'note' => 'Votre note',
        'name' => 'Pedro',
        'age' => '2 ans',
        'breed' => 'Cocker',
        'coat' => 'Beige',
        'date' => '21/12/2025',
        'attitude' => 'Caractèristiques',
    ],

    /* ACTIONS */
    'actions' => [
        'view_animal' => "Voir la fiche de :name",
        'edit_animal' => "Modifier la fiche de :name",
        'delete_animal' => "Supprimer la fiche de :name",
        'view_note' => "Voir la note de :email",
        'edit_note' => "Modifier la note de :email",
        'delete_note' => "Supprimer la note de :email",
    ],

    /* ETATS POSSIBLES */
    'states' => [
        'pending' => 'En attente',
        'done' => 'Terminée',
        'in_progress' => 'En cours',
        'available' => 'Disponible',
        'currently_adopted' => 'Actuellement adopté',
        'adopted' => 'Adopté',
        'awaiting_adoption' => 'En attente d’adoption',
        'in_care' => 'En soin',
    ],

    /* FIL D’ARIANE / TITRES */
    'ariane' => [
        'animals_index' => "Voir tous les animaux",
        'animal_show' => "Fiche de :name",
        'animal_create' => "Ajouter un animal",
    ],

    /* TITRES SECTIONS FICHE ANIMAL */
    'sections' => [
        'definitions' => "Informations sur l'animal",
        'general_information' => "Informations générales",
        'health_and_characteristics' => "Santé et caractéristiques",
        'visit_notes' => "Notes de visites",
    ],

    /* TEXTES INFORMATIFS */
    'info_texts' => [
        'general_information' => "Renseignez les informations principales de l’animal, y compris son nom, son âge et son type.",
        'health_and_characteristics' => "Indiquez les informations sur la santé, le statut et le caractère de l’animal.",
    ],

];
