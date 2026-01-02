<?php

use App\Enums\AnimalSex;
use App\Models\Animal;
use Livewire\Component;

new class extends Component {
    use \Livewire\WithFileUploads;
    public Animal $animal;

    public string $animalName;
    public string $animalRace;
    public string $animalVaccine;
    public string $animalAge;
    public string $animalCoat;
    public string $animalDate;

    public string $animalState;
    public string $animalSex;
    public string $animalType;
    public string $animalAttitude;
    public array $types = [];
    public array $vaccins = [];
    public array $sexes = [];
    public array $states = [];


    public function mount($id): void
    {
        $this->types = [\App\Enums\Type::Dog->value, \App\Enums\Type::Cat->value, \App\Enums\Type::Rabbit->value, \App\Enums\Type::Hamster->value, \App\Enums\Type::Bird->value];
        $this->vaccins = [\App\Enums\AnimalVaccine::Vaccinated->value, \App\Enums\AnimalVaccine::NotVaccinated->value];

        $this->sexes = [
            [
                'field_name' => AnimalSex::Male->value,
                'name' => 'sex',
            ],
            [
                'field_name' => AnimalSex::Female->value,
                'name' => 'sex',
            ],
        ];

        $this->states = [\App\Enums\AnimalStates::Available->value, \App\Enums\AnimalStates::CurrentlyAdopted->value, \App\Enums\AnimalStates::Adopted->value, \App\Enums\AnimalStates::AwaitingAdoption->value, \App\Enums\AnimalStates::InCare->value];


        $this->animal = Animal::find($id);


        $this->animalName = $this->animal->name;
        $this->animalRace = $this->animal->breed;
        $this->animalCoat = $this->animal->coat;
        $this->animalDate = $this->animal->date->format('Y-m-d');
        $this->animalAge = $this->animal->age;
        $this->animalState = $this->animal->state;
        $this->animalSex = $this->animal->sex;
        $this->animalVaccine = $this->animal->vaccine;
        $this->animalType = $this->animal->type;
        $this->animalAttitude = $this->animal->attitude;
    }

    public function update(): void
    {
        $this->validate(
            [
                'animalName' => ['required', 'string', 'max:255', 'min:2'],
                'animalRace' => ['required', 'string', 'max:255'],
                'animalVaccine' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAge' => ['required', 'integer', 'min:0', 'max:100'],
                'animalCoat' => ['required', 'string', 'max:255'], /*A voir*/
                'animalDate' => ['required', 'date'],
                'animalState' => ['required', 'string', 'max:255'], /*A voir*/
                'animalSex' => ['required', 'string', 'max:255'], /*A voir*/
                'animalType' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAttitude' => ['required', 'string', 'max:255'],
            ]
        );


        $this->animal->update(
            [
                'name' => $this->animalName,
                'breed' => $this->animalRace,
                'vaccine' => $this->animalVaccine,
                'age' => $this->animalAge,
                'coat' => $this->animalCoat,
                'date' => $this->animalDate,
                'state' => $this->animalState,
                'sex' => $this->animalSex,
                'type' => $this->animalType,
                'attitude' => $this->animalAttitude,
            ]
        );

        $this->redirect(route('animals.show', ['locale' => app()->getLocale(), 'id' => $this->animal->id]));
    }
};
