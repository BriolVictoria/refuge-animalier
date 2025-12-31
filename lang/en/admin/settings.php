<?php

return [

    /* GENERAL TITLES */
    'page' => [
        'title' => 'Profile',
        'sr_only' => 'Profile',
    ],

    /* GENERAL INFORMATION */
    'information' => [
        'title' => 'General Information',
        'description' => 'View and update your personal information to keep your profile up to date.',

        'avatar' => [
            'preview_alt' => "Image preview",
            'current_alt' => 'Current avatar',
            'edit_button' => "Edit image",
        ],

        'fields' => [
            'name' => [
                'label' => 'Full Name',
                'placeholder' => 'John Doe',
            ],
            'email' => [
                'label' => 'Email Address',
                'placeholder' => 'john.doe@gmail.com',
            ],
            'phone' => [
                'label' => 'Phone',
                'placeholder' => '04/70 54 23 54 12',
            ],
            'role' => [
                'label' => 'Role',
            ],
            'creation_date' => [
                'label' => "Registration Date",
                'placeholder' => '12/12/2025',
            ],
        ],
    ],

    /* SECURITY / PASSWORD */
    'security' => [
        'title' => 'Account Security',

        'fields' => [
            'current_password' => 'Current password',
            'new_password' => 'New password',
            'confirm_password' => 'Confirm new password',
        ],

        'button' => [
            'label' => 'Confirm password change',
            'title' => 'Confirm password change',
        ],
    ],

    /* NOTIFICATIONS */
    'notifications' => [
        'title' => 'Notification Preferences',

        'items' => [
            'email' => 'Email notifications',
            'dashboard' => 'Dashboard notifications',
            'urgent_adoption' => 'Urgent adoption alerts',
            'appointment' => 'Appointment reminder',
        ],
    ],

    /* BUTTONS */
    'buttons' => [
        'save' => 'Save changes',
        'save_title' => 'Save changes',
    ],

];
