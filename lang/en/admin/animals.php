<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => "The animal has been successfully deleted !",
    'note_success_message' => "The note has been successfully deleted !",
    'empty' => 'No results found for your search.',
    'empty_notes' => "This animal has no notes",

    /* ANIMALS TABLE */
    'animals' => [
        'title_sronly' => 'Animals',
        'title' => 'Animals',
        'add_label' => '+ Add an animal',
        'add_button' => '+ Add an animal',
        'search_placeholder' => 'Search for an animal',
        'image_alt' => 'Breadcrumb arrow icon',
    ],

    'images_alt' => 'Animal’s images',

    /* DELETE MODAL */
    'delete_modal' => [
        'animal' => [
            'title' => 'Do you want to delete this animal ?',
            'description' => "This action is permanent. The record of this animal will be deleted and cannot be recovered.",
            'delete_button' => 'Delete the record',
            'cancel_button' => 'Cancel',
        ],
        'note' => [
            'title' => 'Do you want to delete this note ?',
            'description' => "This action is permanent. The note will be deleted and cannot be recovered.",
            'delete_button' => 'Delete the note',
            'cancel_button' => 'Cancel',
        ],
    ],

    /* BUTTONS */
    'buttons' => [
        'delete' => 'Delete',
        'cancel' => 'Cancel',
        'edit_record' => 'Edit the record',
        'create_note' => 'Create the note',
        'edit_note' => 'Edit the note',
        'add_visit_note' => 'Add a visit note',
        'create_animal' => "Create the animal record",
        'edit_animal' => "Edit the animal record",
    ],

    /* FIELDS */
    'fields' => [
        'photo' => "Animal images",
        'name' => "Name",
        'type' => "Type",
        'age' => "Age",
        'sex' => "Sex",
        'breed' => "Breed",
        'coat' => "Coat",
        'vaccine' => "Vaccine",
        'state' => "Status",
        'attitude' => "Characteristic",
        'updated_at' => "Updated at",
        'actions' => "Actions",
        'email' => "Email",
        'note' => "Note",
        'date' => "Update date",
    ],

    'animal_alt' => 'Image of :name',

    /* PLACEHOLDERS */
    'placeholder' => [
        'search' => 'Search for an animal',
        'email' => 'ambre.smith@gmail.com',
        'note' => 'Your note',
        'name' => 'Pedro',
        'age' => '2 years',
        'breed' => 'Cocker',
        'coat' => 'Beige',
        'date' => '12/21/2025',
        'attitude' => 'Characteristics',
    ],

    /* ACTIONS */
    'actions' => [
        'view_animal' => "View :name’s record",
        'edit_animal' => "Edit :name’s record",
        'delete_animal' => "Delete :name’s record",
        'view_note' => "View :email’s note",
        'edit_note' => "Edit :email’s note",
        'delete_note' => "Delete :email’s note",
    ],


    /* BREADCRUMBS / TITLES */
    'ariane' => [
        'animals_index' => "View all animals",
        'animal_show' => ":name’s record",
        'animal_create' => "Add an animal",
        'animal_edit' => "Edit :name",
    ],

    /* ANIMAL RECORD SECTION TITLES */
    'sections' => [
        'definitions' => "Animal information",
        'general_information' => "General information",
        'health_and_characteristics' => "Health and characteristics",
        'visit_notes' => "Visit notes",
    ],

    /* INFORMATION TEXTS */
    'info_texts' => [
        'general_information' => "Enter the main information of the animal, including its name, age, and type.",
        'health_and_characteristics' => "Provide information about the animal’s health, status, and characteristics.",
    ],

];
