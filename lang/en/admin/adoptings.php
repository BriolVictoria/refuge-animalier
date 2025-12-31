<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => 'The request has been successfully deleted!',
    'empty' => 'No results found for your search.',

    /* TABLE ADOPTIONS */
    'adoptings' => [
        'title_sronly' => 'Adoption Requests',
        'title' => 'Adoption Requests',
        'add_label' => '+ Add an adoption request',
        'add_button' => '+ Add an adoption request',
        'search_placeholder' => 'Search for a request',
        'title_edit' => 'Search for a request',
        'image_alt' => 'Breadcrumb arrow icon',
    ],

    /* DELETE MODAL */
    'delete_modal' => [
        'title' => 'Do you want to delete this request?',
        'description' => 'This action is permanent. The record of this request will be deleted and cannot be recovered.',
        'delete_button' => 'Delete the record',
        'cancel_button' => 'Cancel',
    ],

    /* BUTTONS */
    'buttons' => [
        'delete' => 'Delete',
        'cancel' => 'Cancel',
        'edit_record' => 'Edit the record',
    ],

    /* FIELDS */
    'fields' => [
        'last_name' => "Adopter's last name",
        'first_name' => "Adopter's first name",
        'email' => "Email address",
        'animal_name' => "Desired animal's name",
        'phone_number' => "Phone number",
        'address' => "Address",
        'city' => "City",
        'postcode' => "Postal code",
        'other_animal' => "Other pets at home",
        'children' => "Presence of children",
        'environment' => "Type of environment",
        'outside' => "Outdoor space",
        'creation_date' => "Request date",
        'state' => "Status",
        'comment' => "Internal comment (staff only)",
        'selected_animal' => "Desired animal",
        'actions' => "Actions",
    ],

    /* PLACEHOLDER */
    'placeholder' => [
        'address' => 'Lily Street',
        'city' => 'London',
        'comment' => 'Comment',
        'last_name' => 'Smith',
        'first_name' => 'Ambre',
        'email' => 'ambre.smith@gmail.com',
        'phone' => '0470 96 78 33',
        'post_code' => '1234',
        'date' => '02/12/2025',
    ],

    /* ACTIONS */
    'actions' => [
        'view' => "View :name's record",
        'edit' => "Edit :name's record",
        'delete' => "Delete :name's record",
        'save' => 'Save the request',
    ],

    /* BREADCRUMBS / TITLES */
    'ariane' => [
        'adoptings_index' => "View adoption requests",
        'adopting_show' => ":name's record",
        'adopting_create' => "Add a request",
    ],

    /* BUTTONS ON CREATE / SHOW PAGE */
    'buttons_show' => [
        'edit' => 'Edit the record',
        'save' => 'Save the request',
    ],

    /* VOLUNTEER INFORMATION TITLES AND CONTENT */
    'volunteer_sections' => [
        'personal_info' => [
            'title' => "Adopter information",
            'content' => "Enter the adopter's personal information to contact them and track their request.",
        ],
        'desired_animal' => [
            'title' => "Desired animal",
            'content' => "Select the animal the adopter wants to welcome.",
        ],
        'living_environment' => [
            'title' => "Living environment",
            'content' => "Specify the adopter's living situation to ensure the animal's well-being.",
        ],
        'other_info' => [
            'title' => "Other information",
            'content' => "Add additional information regarding the request or internal notes.",
        ],
    ],

];
