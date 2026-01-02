<?php

use App\Enums\AdoptingEnvironement;
use App\Enums\AdoptingState;
use App\Enums\AnimalEnum;
use App\Enums\AnimalSex;
use App\Enums\AnimalStates;
use App\Enums\AnimalVaccine;
use App\Enums\AvailabilitySelect;
use App\Enums\MessageState;
use App\Enums\Outside;
use App\Enums\RoleUser;
use App\Enums\Children;
use App\Enums\Type;

return [
    // AdoptingEnvironment
    AdoptingEnvironement::House->value => 'Maison',
    AdoptingEnvironement::Flat->value => 'Appartement',
    AdoptingEnvironement::FlatShare->value => 'Colocation',
    AdoptingEnvironement::Studio->value => 'Studio',
    AdoptingEnvironement::Other->value => 'Autre',

    // AdoptingState
    AdoptingState::InProgress->value => 'En cours',
    AdoptingState::Done->value => 'Terminée',
    AdoptingState::Pending->value => 'En attente',

    // AnimalSex
    AnimalSex::Female->value => 'Femelle',
    AnimalSex::Male->value => 'Mâle',

    // AnimalStates
    AnimalStates::Adopted->value => 'Adopté',
    AnimalStates::InCare->value => 'Pris en charge',
    AnimalStates::CurrentlyAdopted->value => 'Actuellement adopté',
    AnimalStates::AwaitingAdoption->value => 'En attente d’adoption',
    AnimalStates::Available->value => 'Disponible',

    // AnimalVaccine
    AnimalVaccine::Vaccinated->value => 'Vacciné',
    AnimalVaccine::NotVaccinated->value => 'Non vacciné',

    // AvailabilitySelect
    AvailabilitySelect::NotAvailable->value => 'Non disponible',
    AvailabilitySelect::AvailableDuringTheDay->value => 'Disponible en journée',
    AvailabilitySelect::AvailableInTheMorning->value => 'Disponible le matin',
    AvailabilitySelect::AvailableInTheEvening->value => 'Disponible le soir',

    // MessageState
    MessageState::Read->value => 'Lu',
    MessageState::NotRead->value => 'Non lu',

    // RoleUser
    RoleUser::Administrator->value => 'Administrateur',
    RoleUser::Volunteer->value => 'Bénévole',

    //Children
    Children::Children->value => 'Oui',
    Children::NoChildren->value => 'Non',

    //Outside
    Outside::Outside->value => 'Oui',
    Outside::NoOutside->value => 'Non',

    //AnimalEnum
    AnimalEnum::Animal->value => 'Oui',
    AnimalEnum::NoAnimal->value => 'Non',

    //TypeEnum
    Type::Dog->value => 'Chien',
    Type::Cat->value => 'Chat',
    Type::Rabbit->value => 'Lapin',
    Type::Hamster->value => 'Hamster',
    Type::Bird->value => 'Oiseau',

    //LanguageEnum
    \App\Enums\Language::Fr->value => 'Français',
    \App\Enums\Language::En->value => 'Anglais',
];
