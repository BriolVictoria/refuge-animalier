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
    //AdoptingEnvironment
    AdoptingEnvironement::House->value => 'House',
    AdoptingEnvironement::Flat->value => 'Flat',
    AdoptingEnvironement::FlatShare->value => 'Flat share',
    AdoptingEnvironement::Studio->value => 'Studio',
    AdoptingEnvironement::Other->value => 'Other',

    //AdoptingState
    AdoptingState::InProgress->value => 'In progress',
    AdoptingState::Done->value => 'Done',
    AdoptingState::Pending->value => 'Pending',

    //AnimalSex
    AnimalSex::Female->value => 'Female',
    AnimalSex::Male->value => 'Male',

    //AnimalStates
    AnimalStates::Adopted->value => 'Adopted',
    AnimalStates::InCare->value => 'In care',
    AnimalStates::CurrentlyAdopted->value => 'Currently adopted',
    AnimalStates::AwaitingAdoption->value => 'Awaiting adoption',
    AnimalStates::Available->value => 'Available',

    //AnimalVaccine
    AnimalVaccine::Vaccinated->value => 'Vaccinated',
    AnimalVaccine::NotVaccinated->value => 'Not vaccinated',

    //AvailabilitySelect
    AvailabilitySelect::NotAvailable->value => 'Note available',
    AvailabilitySelect::AvailableDuringTheDay->value => 'Available during the day',
    AvailabilitySelect::AvailableInTheMorning->value => 'Available in the morning',
    AvailabilitySelect::AvailableInTheEvening->value => 'Available in the evening',

    //MessageState
    MessageState::Read->value => 'Read',
    MessageState::NotRead->value => 'Not read',

    //RoleUser
    RoleUser::Administrator->value => 'Administrator',
    RoleUser::Volunteer->value => 'Volunteer',

    //Children
    Children::Children->value => 'Yes',
    Children::NoChildren->value => 'No',

    //Outside
    Outside::Outside->value => 'Yes',
    Outside::NoOutside->value => 'No',

    //AnimalEnum
    AnimalEnum::Animal->value => 'Yes',
    AnimalEnum::NoAnimal->value => 'No',

    //TypeEnum
    Type::Dog->value => 'Dog',
    Type::Cat->value => 'Cat',
    Type::Rabbit->value => 'Rabbit',
    Type::Hamster->value => 'Hamster',
    Type::Bird->value => 'Bird',

    //LanguageEnum
    \App\Enums\Language::Fr->value => 'French',
    \App\Enums\Language::En->value => 'English',
];


