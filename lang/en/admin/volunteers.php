<?php

return [

    /* GLOBAL MESSAGES */
    'success_message' => 'The volunteer has been successfully deleted !',
    'empty' => 'No results found for your search.',

    /* VOLUNTEERS TABLE */
    'volunteers' => [
        'title_sronly' => 'Volunteers',
        'title' => 'Volunteers',
        'label' => '+ Add a volunteer',
        'title_button' => '+ Add a volunteer',
        'search_placeholder' => 'Search for a volunteer',
        'delete_message' => 'Delete :name’s record',
        'image_alt' => 'Breadcrumb arrow icon',
    ],

    /* DELETE MODAL */
    'delete_modal' => [
        'title' => 'Do you want to delete this volunteer ?',
        'description' => 'This action is permanent. The record of this volunteer will be deleted and cannot be recovered.',
        'delete_button' => 'Delete record',
        'cancel_button' => 'Cancel',
    ],

    /* BREADCRUMBS / TITLES */
    'ariane' => [
        'volunteer_index' => "View all volunteers",
        'volunteer_show' => ":name’s record",
        'volunteer_create' => "Add a volunteer",
        'volunteer_edit' => "Edit :name",
    ],

    /* CREATE / EDIT FORM */
    'form' => [
        'sections' => [
            'personal_info' => [
                'title' => 'Personal Information',
                'description' => 'Enter the volunteer’s personal information to contact them and manage their profile.',
            ],
            'availabilities' => [
                'title' => 'Availabilities',
                'description' => 'Indicate the days and time slots when the volunteer is available to participate in activities.',
            ],
            'account' => [
                'title' => 'Account Creation',
                'description' => 'Set the password so the volunteer can access their account.',
            ],
        ],
        'fields' => [
            'last_name' => ['label' => 'Last Name', 'placeholder' => 'Smith'],
            'first_name' => ['label' => 'First Name', 'placeholder' => 'Ambre'],
            'email' => ['label' => 'Email Address', 'placeholder' => 'ambre.smith@gmail.com'],
            'phone_number' => ['label' => 'Phone Number', 'placeholder' => '0450 78 96 87'],
            'adresse' => ['label' => 'Address', 'placeholder' => '50 Lily Street'],
            'town' => ['label' => 'City', 'placeholder' => 'London'],
            'postal_code' => ['label' => 'Postal Code', 'placeholder' => '1234'],
            'password' => ['label' => 'Account Password', 'placeholder' => '123456789'],
        ],
        'availabilities' => [
            'monday' => 'Monday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
            'not_available' => 'Not available',
            'available_morning' => 'Available in the morning',
            'available_evening' => 'Available in the evening',
            'available_day' => 'Available all day',
        ],
        'buttons' => [
            'create' => 'Create volunteer record',
        ],
    ],

    /* DETAILED VOLUNTEER RECORD */
    'show' => [
        'title_sronly' => 'Detailed volunteer record',
        'fields' => [
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'adresse' => 'Address',
            'postal_code' => 'Postal Code',
            'town' => 'City',
            'password' => 'Password',
        ],
        'buttons' => [
            'edit' => 'Edit record',
            'delete' => 'Delete record',
            'back_to_list' => 'Back to volunteer list',
        ],
    ],

    /* TABLE / MODAL FIELDS */
    'fields' => [
        'last_name' => 'Last Name',
        'first_name' => 'First Name',
        'email' => 'Email',
        'phone_number' => 'Phone',
        'action' => 'Action',
    ],

    /* GENERAL BUTTONS */
    'buttons' => [
        'delete' => 'Delete',
        'delete_fiche' => 'Delete :name’s record',
        'cancel' => 'Cancel',
        'add_volunteer' => '+ Add a volunteer',
        'edit' => 'Edit :name’s record',
        'view' => 'View :name’s record',
    ],

];
