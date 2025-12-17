<?php

use Livewire\Component;

new class extends Component
{
    public string $volunteerLastName;
    public string $volunteerFirstName;
    public string $volunteerEmail;
    public string $volunteerPhoneNumber;
    public string $volunteerAdresse;
    public string $volunteerTown;
    public string $volunteerPostalCode;
    public string $volunteerPassword;
    public array $volunteerAvailabilities = [
        'monday' => 'available',
        'tuesday' => 'available',
        'wednesday' => 'available',
        'thursday' => 'available',
        'friday' => 'available',
        'saturday' => 'available',
        'sunday' => 'available',
    ];



    public function create():void
    {

        $this->validate(
            [
                'volunteerName' => ['required', 'string', 'max:255'],
                'volunteerEmail' => ['required', 'string', 'max:255'],
                'volunteerPhoneNumber' => ['required', 'string', 'max:255'],
                'volunteerFirstName' => ['required', 'string', 'max:255'],
                'volunteerAdresse' => ['required', 'string', 'max:255'],
                'volunteerTown' => ['required', 'string', 'max:255'],
                'volunteerpostalCode' => ['required', 'string', 'max:255'],
                'volunteerPassword' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.monday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.tuesday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.wednesday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.thursday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.friday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.saturday' => ['required', 'string', 'max:255'],
                'volunteerAvailabilities.sunday' => ['required', 'string', 'max:255'],
            ]
        );

        \App\Models\Volunteer::create([
            'last_name' => $this->volunteerLastName,
            'first_name' => $this->volunteerFirstName,
            'email' => $this->volunteerEmail,
            'phone_number' => $this->volunteerPhoneNumber,
            'adresse' => $this->volunteerAdresse,
            'town' => $this->volunteerTown,
            'postal_code' => $this->volunteerPostalCode,
            'password' => $this->volunteerPassword,
        ]);

        \App\Models\Availability::create([
            'monday' => $this->volunteerAvailabilities['monday'],
            'tuesday' => ['required', 'string', 'max:255'],
            'wednesday' => ['required', 'string', 'max:255'],
            'thursday' => ['required', 'string', 'max:255'],
            'friday' => ['required', 'string', 'max:255'],
            'saturday' => ['required', 'string', 'max:255'],
            'sunday' => ['required', 'string', 'max:255'],
        ]);

        $this->redirect(route('volunteers.index'));
    }
};
