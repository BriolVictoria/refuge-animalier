<?php

use App\Models\Adopting;
use Livewire\Component;

new class extends Component
{
    public Adopting $adopting;

    public string $adoptingFirstName;
    public string $adoptingLastName;
    public string $adoptingEmail;
    public string $adoptingPhoneNumber;
    public string $adoptingAddress;
    public string $adoptingCity;
    public string $adoptingPostCode;
    public string $adoptingOtherAnimal;
    public string $adoptingChildren;
    public string $adoptingEnvironment;
    public string $adoptingOutside;
    public string $adoptingCreationDate;
    public string $adoptingState;
    public string $adoptingComment;

    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);

        $this->adoptingFirstName = $this->adopting->first_name;
        $this->adoptingLastName = $this->adopting->last_name;
        $this->adoptingEmail = $this->adopting->email;
        $this->adoptingPhoneNumber = $this->adopting->phone_number;
        $this->adoptingAddress = $this->adopting->address;
        $this->adoptingCity = $this->adopting->city;
        $this->adoptingPostCode = $this->adopting->postcode;
        $this->adoptingOtherAnimal = $this->adopting->other_animal;
        $this->adoptingEnvironment = $this->adopting->environment;
        $this->adoptingOutside = $this->adopting->outside;
        $this->adoptingCreationDate = $this->adopting->creation_date;
        $this->adoptingState = $this->adopting->state;
        $this->adoptingComment = $this->adopting->comment;
    }
};
