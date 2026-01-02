<?php

namespace App;

trait ValidationAdopting
{
    protected function validation(): void
    {
        $this->validate(
            [
                'adoptingFirstName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'adoptingLastName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'adoptingEmail' => ['required', 'email', 'max:255', 'unique:users,email'],
                'adoptingPhoneNumber' => ['required', 'string', 'max:255'],
                'adoptingAddress' => ['required', 'string', 'max:255'],
                'adoptingCity' => ['required', 'string', 'max:255'],
                'adoptingPostCode' => ['required', 'string'],
                'adoptingOtherAnimal' => ['required', 'string', 'max:255'],
                'adoptingChildren' => ['required', 'string', 'max:255'],
                'adoptingEnvironment' => ['required', 'string', 'max:255'],
                'adoptingOutside' => ['required', 'string', 'max:255'],
                'adoptingCreationDate' => ['required', 'date'],
                'adoptingState' => ['required', 'string', 'max:255'],
                'adoptingComment' => ['required', 'string', 'max:255'],
                'adoptingSelectedAnimalId' => ['required', 'string', 'max:255'],
            ]
        );
    }
}
