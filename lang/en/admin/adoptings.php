<?php

return [

    /*INDEX*/

    // Session messages
    'success_message' => 'The request has been successfully deleted!',
    'empty' => 'No results found for your search.',

    // Adoption Table
    'adoptings' => [
        'title_sronly' => 'Adoption Requests',
        'title' => 'Adoption Requests',
        'add_label' => '+ Add an adoption request',
        'add_button' => '+ Add an adoption request',
        'search_placeholder' => 'Search for a request',
    ],

    // Delete Modal
    'delete_modal' => [
        'title' => 'Do you want to delete this request?',
        'description' => 'This action is permanent. The record of this request will be deleted and cannot be recovered.',
        'delete_button' => 'Delete record',
        'cancel_button' => 'Cancel',
    ],

    // General Buttons
    'buttons' => [
        'delete' => 'Delete',
        'cancel' => 'Cancel',
    ],

    // Fields
    'fields' => [
        'last_name' => "Adopter's last name",
        'first_name' => "Adopter's first name",
        'animal_name' => "Desired animal",
        'creation_date' => "Date",
    ],

    // Actions
    'actions' => [
        'view' => "View :name's record",
        'edit' => "Edit :name's record",
        'delete' => "Delete :name's record",
    ],

    /*// States
    'states' => [
        // you can add possible request states here
        'pending' => 'Pending',
        'approved' => 'Approved',
        'rejected' => 'Rejected',
    ],*/

    // Table columns
    'columns' => [
        'last_name' => 'Last Name',
        'first_name' => 'First Name',
        'animal_name' => 'Desired Animal',
        'creation_date' => 'Date',
        'state' => 'Status',
        'actions' => 'Action',
    ],

];
