<?php

use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {

    use \App\ValidationAdopting;

    public string $adoptingFirstName;
    public string $adoptingLastName;
    public string $adoptingEmail;
    public string $adoptingPhoneNumber;
    public string $adoptingAddress;
    public string $adoptingCity;
    public string $adoptingPostCode;
    public string $adoptingOtherAnimal = \App\Enums\TrueOrFalse::Yes->value;
    public string $adoptingChildren = \App\Enums\TrueOrFalse::Yes->value;
    public string $adoptingEnvironment = \App\Enums\AdoptingEnvironement::House->value;
    public string $adoptingOutside = \App\Enums\TrueOrFalse::Yes->value;
    public string $adoptingCreationDate;
    public string $adoptingState = \App\Enums\AdoptingState::Pending->value;
    public string $adoptingComment;
    public string $adoptingSelectedAnimalId;

    public Collection $animals;
    public array $other_animals = [];
    public array $children = [];
    public array $outsides = [];
    public array $states = [];
    public array $environments = [];


    public function mount(): void
    {
        $this->animals = Animal::all();
        $this->adoptingSelectedAnimalId = $this->animals->toArray()[0]['id'];


        $this->other_animals = [
            ['field_name' => \App\Enums\TrueOrFalse::Yes->value, 'name' => 'animal'],
            ['field_name' => \App\Enums\TrueOrFalse::No->value, 'name' => 'animal'],
        ];

        $this->children = [
            ['field_name' => \App\Enums\TrueOrFalse::Yes->value, 'name' => 'children'],
            ['field_name' => \App\Enums\TrueOrFalse::No->value, 'name' => 'children'],
        ];

        $this->outsides = [
            ['field_name' => \App\Enums\TrueOrFalse::Yes->value, 'name' => 'outside'],
            ['field_name' => \App\Enums\TrueOrFalse::No->value, 'name' => 'outside'],
        ];

        $this->states = [\App\Enums\AdoptingState::Pending->value, \App\Enums\AdoptingState::Done->value, \App\Enums\AdoptingState::InProgress->value];

        $this->environments = [\App\Enums\AdoptingEnvironement::Flat->value, \App\Enums\AdoptingEnvironement::FlatShare->value, \App\Enums\AdoptingEnvironement::House->value, \App\Enums\AdoptingEnvironement::Studio->value, \App\Enums\AdoptingEnvironement::Other->value];


    }

    public function updated(): void
    {
        $this->validation();
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
                'outside' => $this->adoptingOutside,
                'creation_date' => $this->adoptingCreationDate,
                'state' => $this->adoptingState,
                'comment' => $this->adoptingComment,
                'animal_id' => $this->adoptingSelectedAnimalId
            ]
        );

        $this->redirect(route('adoptings.index'));
    }
};
