<?php

use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {
    public string $adoptingFirstName;
    public string $adoptingLastName;
    public string $adoptingEmail;
    public string $adoptingPhoneNumber;
    public string $adoptingAddress;
    public string $adoptingCity;
    public string $adoptingPostCode;
    public string $adoptingOtherAnimal = 'Oui';
    public string $adoptingChildren = 'Oui';
    public string $adoptingEnvironment = 'Maison';
    public string $adoptingOutside = 'Oui';
    public string $adoptingCreationDate;
    public string $adoptingState = 'En attente';
    public string $adoptingComment;
    public string $adoptingSelectedAnimalId;

    public Collection $animals;

    public function mount(): void
    {
        $this->animals = Animal::all();
        $this->adoptingSelectedAnimalId = $this->animals->toArray()[0]['id'];
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

    public function create(): void
    {
        $this->validation();

        \App\Models\Adopting::create(
            [
                'first_name' => $this->adoptingFirstName,
                'last_name' => $this->adoptingLastName,
                'email' => $this->adoptingEmail,
                'phone_number' => $this->adoptingPhoneNumber,
                'address' => $this->adoptingAddress,
                'city' => $this->adoptingCity,
                'postcode' => $this->adoptingPostCode,
                'other_animal' => $this->adoptingOtherAnimal,
                'children' => $this->adoptingChildren,
                'environment' => $this->adoptingEnvironment,
                'creation_date' => $this->adoptingCreationDate,
                'state' => $this->adoptingState,
                'comment' => $this->adoptingComment,
            ]
        );

        $this->redirect(route('adoptings.index'));
    }
};
