<?php

use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public Volunteer $volunteer;
    public string $volunteerLastName;
    public string $volunteerFirstName;
    public string $volunteerEmail;
    public string $volunteerPhoneNumber;
    public string $volunteerAdresse;
    public string $volunteerTown;
    public string $volunteerPostalCode;
    public string $volunteerPassword;
    public array $options;
    public array $volunteerAvailabilities = [
        'monday' => 'available',
        'tuesday' => 'available',
        'wednesday' => 'available',
        'thursday' => 'available',
        'friday' => 'available',
        'saturday' => 'available',
        'sunday' => 'available',
    ];
    public function mount($id): void
    {
        $this->volunteer = Volunteer::find($id);
        $this->options = [\App\Enums\AvailabilitySelect::NotAvailable->value, \App\Enums\AvailabilitySelect::AvailableInTheEvening->value, \App\Enums\AvailabilitySelect::AvailableInTheMorning->value, \App\Enums\AvailabilitySelect::AvailableDuringTheDay->value];

        $this->volunteerLastName = $this->volunteer->last_name;
        $this->volunteerFirstName = $this->volunteer->first_name;
        $this->volunteerEmail = $this->volunteer->email;
        $this->volunteerPhoneNumber = $this->volunteer->phone_number;
        $this->volunteerAvailabilities['monday'] = $this->volunteer->availability->monday;
        $this->volunteerAvailabilities['tuesday'] = $this->volunteer->availability->tuesday;
        $this->volunteerAvailabilities['wednesday'] = $this->volunteer->availability->wednesday;
        $this->volunteerAvailabilities['thursday'] = $this->volunteer->availability->thursday;
        $this->volunteerAvailabilities['friday'] = $this->volunteer->availability->friday;
        $this->volunteerAvailabilities['saturday'] = $this->volunteer->availability->saturday;
        $this->volunteerAvailabilities['sunday'] = $this->volunteer->availability->sunday;
        $this->volunteerAdresse = $this->volunteer->adresse;
        $this->volunteerTown = $this->volunteer->town;
        $this->volunteerPostalCode = $this->volunteer->postal_code;
        $this->volunteerPassword = $this->volunteer->password;
    }


    public function update(): void
    {
        $this->validate(
            [
                'volunteerFirstName' => ['required', 'string', 'max:255', 'min:2'],
                'volunteerEmail' => ['required', 'email', 'max:255'],
                'volunteerPhoneNumber' => ['required', 'string', 'max:255'],
                'volunteerLastName' => ['required', 'string', 'max:255', 'min:2'],
                'volunteerAdresse' => ['required', 'string', 'max:255'],
                'volunteerTown' => ['required', 'string', 'max:255'],
                'volunteerPostalCode' => ['required', 'string'],
                'volunteerPassword' => ['required', 'string', 'max:255'],
            ]
        );

        $this->volunteer->update(
            [
                'last_name' => $this->volunteerLastName,
                'first_name' => $this->volunteerFirstName,
                'email' => $this->volunteerEmail,
                'phone_number' => $this->volunteerPhoneNumber,
                'adresse' => $this->volunteerAdresse,
                'town' => $this->volunteerTown,
                'postal_code' => $this->volunteerPostalCode,
                'password' => $this->volunteerPassword,
            ]
        );

        $this->redirect(route('volunteers.show', ['locale' => app()->getLocale(), 'id' => $this->volunteer->id]));
    }
};
