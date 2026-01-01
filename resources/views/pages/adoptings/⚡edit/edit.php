<?php

use App\Models\Adopting;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {

    use \App\ValidationAdopting;

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

    public string $adoptingSelectedAnimalId;
    public array $other_animals = [];
    public array $children = [];
    public array $outsides = [];
    public array $states = [];
    public array $environments = [];



    public function mount($id): void
    {
        $this->adopting = Adopting::find($id);
        $this->adoptingSelectedAnimalId = $id;

        $this->other_animals = [
            ['field_name' => \App\Enums\AnimalEnum::Animal->value, 'name' => 'animal'],
            ['field_name' => \App\Enums\AnimalEnum::NoAnimal->value, 'name' => 'animal'],
        ];

        $this->children = [
            ['field_name' => \App\Enums\Children::Children->value, 'name' => 'children'],
            ['field_name' => \App\Enums\Children::NoChildren->value, 'name' => 'children'],
        ];

        $this->outsides = [
            ['field_name' => \App\Enums\Outside::Outside->value, 'name' => 'outside'],
            ['field_name' => \App\Enums\Outside::NoOutside->value, 'name' => 'outside'],
        ];

        $this->states = [\App\Enums\AdoptingState::Pending->value, \App\Enums\AdoptingState::Done->value, \App\Enums\AdoptingState::InProgress->value];

        $this->environments = [\App\Enums\AdoptingEnvironement::Flat->value, \App\Enums\AdoptingEnvironement::FlatShare->value, \App\Enums\AdoptingEnvironement::House->value, \App\Enums\AdoptingEnvironement::Studio->value, \App\Enums\AdoptingEnvironement::Other->value];


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
        $this->adoptingCreationDate = $this->adopting->creation_date->format('Y-m-d');
        $this->adoptingState = $this->adopting->state;
        $this->adoptingComment = $this->adopting->comment;
    }

    public function update(): void
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
            ]
        );
        $this->adopting->update(
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
                'outside' => $this->adoptingEnvironment,
                'creation_date' => $this->adoptingCreationDate,
                'state' => $this->adoptingState,
                'comment' => $this->adoptingComment,
                'animal_id' => $this->adoptingSelectedAnimalId
            ]
        );

        $this->redirect(route('adoptings.show', ['locale' => app()->getLocale(), 'id' => $this->adopting->id]));
    }
};

