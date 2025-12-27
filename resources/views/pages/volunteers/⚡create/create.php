<?php

use Livewire\Component;

new class extends Component {
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

    public function mount()
    {
        $this->options = [\App\Enums\AvailabilitySelect::NotAvailable->value, \App\Enums\AvailabilitySelect::AvailableInTheEvening->value, \App\Enums\AvailabilitySelect::AvailableInTheMorning->value, \App\Enums\AvailabilitySelect::AvailableDuringTheDay->value];

    }


    public function create(): void
    {

        $this->validate(
            [
                'volunteerFirstName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'volunteerEmail' => ['required', 'email', 'max:255'],
                'volunteerPhoneNumber' => ['required', 'string', 'max:255', 'regex:/^(\+32|0)[1-9][0-9]{7}$/'],
                'volunteerLastName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'volunteerAdresse' => ['required', 'string', 'max:255'],
                'volunteerTown' => ['required', 'string', 'max:255'],
                'volunteerPostalCode' => ['required', 'string', 'regex:/^\d{4}$/'],
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

        $volunteer = \App\Models\Volunteer::create([
            'last_name' => $this->volunteerLastName,
            'first_name' => $this->volunteerFirstName,
            'email' => $this->volunteerEmail,
            'phone_number' => $this->volunteerPhoneNumber,
            'adresse' => $this->volunteerAdresse,
            'town' => $this->volunteerTown,
            'postal_code' => $this->volunteerPostalCode,
            'password' => $this->volunteerPassword,
        ]);

        $volunteer->availability()->create([
            'monday' => $this->volunteerAvailabilities['monday'],
            'tuesday' => $this->volunteerAvailabilities['tuesday'],
            'wednesday' => $this->volunteerAvailabilities['wednesday'],
            'thursday' => $this->volunteerAvailabilities['thursday'],
            'friday' => $this->volunteerAvailabilities['friday'],
            'saturday' => $this->volunteerAvailabilities['saturday'],
            'sunday' => $this->volunteerAvailabilities['sunday'],
        ]);

        $this->redirect(route('volunteers.index'));
    }
};
