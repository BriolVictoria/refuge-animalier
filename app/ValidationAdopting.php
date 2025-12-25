<?php

namespace App;

trait ValidationAdopting
{
    protected function validation(): void
    {
        $this->validate(
            [
                'adoptingFirstName' => ['required', 'string', 'max:255'],
                'adoptingLastName' => ['required', 'string', 'max:255'],
                'adoptingEmail' => ['required', 'string', 'max:255'],
                'adoptingPhoneNumber' => ['required', 'string', 'max:255'],
                'adoptingAddress' => ['required', 'string', 'max:255'],
                'adoptingCity' => ['required', 'string', 'max:255'],
                'adoptingPostCode' => ['required', 'string', 'max:255'],
                'adoptingOtherAnimal' => ['required', 'string', 'max:255'],
                'adoptingChildren' => ['required', 'string', 'max:255'],
                'adoptingEnvironment' => ['required', 'string', 'max:255'],
                'adoptingOutside' => ['required', 'string', 'max:255'],
                'adoptingCreationDate' => ['required', 'string', 'max:255'],
                'adoptingState' => ['required', 'string', 'max:255'],
                'adoptingComment' => ['required', 'string', 'max:255'],
                'adoptingSelectedAnimalId' => ['required', 'string', 'max:255'],
            ]
        );
    }
}
