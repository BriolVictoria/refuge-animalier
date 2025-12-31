<?php

use App\Enums\AdoptingEnvironement;
use App\Enums\AdoptingState;
use App\Enums\AnimalSex;
use App\Enums\AnimalStates;
use App\Enums\AnimalVaccine;
use App\Enums\AvailabilitySelect;
use App\Enums\MessageState;
use App\Enums\RoleUser;
use App\Enums\TrueOrFalse;

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

    // TrueOrFalse
    TrueOrFalse::Yes->value => 'Oui',
    TrueOrFalse::No->value => 'Non',
];
