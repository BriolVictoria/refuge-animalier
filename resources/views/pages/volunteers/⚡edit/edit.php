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
};
