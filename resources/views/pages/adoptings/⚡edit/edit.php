<?php

use App\Models\Adopting;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {
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

    public string $animal_name;

    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);

        $this->animal_name = $this->adopting->animal->name;
        $this->adoptingFirstName = $this->adopting->first_name;
        $this->adoptingLastName = $this->adopting->last_name;
        $this->adoptingEmail = $this->adopting->email;
        $this->adoptingPhoneNumber = $this->adopting->phone_number;
        $this->adoptingAddress = $this->adopting->address;
        $this->adoptingCity = $this->adopting->city;
        $this->adoptingPostCode = $this->adopting->postcode;
        $this->adoptingOtherAnimal = $this->adopting->other_animal;
        $this->adoptingChildren = $this->adopting->children;
        $this->adoptingEnvironment = $this->adopting->environment;
        $this->adoptingOutside = $this->adopting->outside;
        $this->adoptingCreationDate = $this->adopting->creation_date;
        $this->adoptingState = $this->adopting->state;
        $this->adoptingComment = $this->adopting->comment;
    }

    public function updated(): void
    {
        $this->validation();
    }

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
};

