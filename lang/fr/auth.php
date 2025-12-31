<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    */

    'logout_title' => 'se déconnecter',
    'title' => 'Connectez-vous pour continuer',
    'required_fields' => 'Les champs * sont requis',
    'logo_alt' => 'Logo les pattes heureuses',

    /* CHAMPS DU FORMULAIRE */
    'fields' => [
        'email' => 'Adresse email',
        'password' => 'Mot de passe',
    ],

    /* PLACEHOLDERS */
    'placeholder' => [
        'email' => 'ambre.smith@gmail.com',
        'password' => '*********',
    ],

    /* BOUTONS */
    'buttons' => [
        'login' => 'Se connecter',
    ],

    /* ERREURS DE VALIDATION */
    'errors' => [
        'required' => 'Ce champ est requis.',
        'email' => "Veuillez entrer une adresse email valide.",
        'password_min' => "Le mot de passe doit contenir au moins :min caractères.",
        'credentials' => "Les identifiants fournis sont incorrects.",
    ],

    /* LIGNES EXISTANTES DE LARAVEL */
    'failed' => 'Ces identifiants ne correspondent pas à nos enregistrements.',
    'password' => 'Le mot de passe fourni est incorrect.',
    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',

];
