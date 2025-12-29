<?php

use App\Enums\AnimalStates;
use Illuminate\Support\Carbon;
use Livewire\Component;

new class extends Component {
    use \Livewire\WithFileUploads;
    public string $animalName;
    public array $animalImages = [];
    public string $animalRace = 'Golden';
    public string $animalVaccine = 'Vacciné';
    public string $animalAge;
    public string $animalCoat;
    public string $animalDate;
    public string $animalState = AnimalStates::AwaitingAdoption->value;
    public string $animalSex = 'Mâle';
    public string $animalType = 'Chien';
    public string $animalAttitude;

    public array $types = [];
    public array $breeds = [];
    public array $vaccins = [];
    public array $sexes = [];
    public array $states = [];

    public function mount()
    {
        $this->types = ['Chien', 'Chat', 'Lapin', 'Hamster'];
        $this->breeds = ['Golden', 'Américan staff', 'Cocker'];
        $this->vaccins = [\App\Enums\AnimalVaccine::Vaccinated->value, \App\Enums\AnimalVaccine::NotVaccinated->value];

        $this->sexes = [
            ['field_name' => \App\Enums\AnimalSex::Female->value, 'name' => 'sex'],
            ['field_name' => \App\Enums\AnimalSex::Male->value, 'name' => 'sex'],
        ];

        $this->states =[\App\Enums\AnimalStates::Available->value, \App\Enums\AnimalStates::CurrentlyAdopted->value, \App\Enums\AnimalStates::Adopted->value, \App\Enums\AnimalStates::AwaitingAdoption->value, \App\Enums\AnimalStates::InCare->value];

    }

    public function create(): void
    {
        $this->validate(
            [
                'animalName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'animalRace' => ['required', 'string', 'max:255'], /*A voir*/
                'animalVaccine' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAge' => ['required', 'integer', 'min:0', 'max:100'],
                'animalCoat' => ['required', 'string', 'max:255'], /*A voir*/
                'animalDate' => ['required', 'date'],
                'animalState' => ['required', 'string', 'max:255'], /*A voir*/
                'animalSex' => ['required', 'string', 'max:255'], /*A voir*/
                'animalType' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAttitude' => ['required', 'string', 'max:255'],
                'animalImages.*' =>['image', 'max:2048'],
            ] );

        $imagesUrl = [];
        foreach ($this->animalImages as $image) {
            $imagesUrl[] = $image->store('animals', 'public');
        }

        \App\Models\Animal::create(
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
                'images' => $imagesUrl,
            ]
        );

        $this->redirect(route('animals.index'));
    }
};
