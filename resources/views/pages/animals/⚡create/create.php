<?php

use App\Enums\AnimalSex;
use App\Enums\AnimalStates;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

new class extends Component {
    use \Livewire\WithFileUploads;

    public string $animalName;
    public array $animalImages = [];
    public string $animalRace;
    public string $animalVaccine = \App\Enums\AnimalVaccine::Vaccinated->value;
    public string $animalAge;
    public string $animalCoat;
    public string $animalDate;
    public string $animalType = \App\Enums\Type::Dog->value;
    public string $animalState = AnimalStates::AwaitingAdoption->value;
    public string $animalSex = \App\Enums\AnimalSex::Female->value;
    public string $animalAttitude;

    public array $types = [];
    public array $vaccins = [];
    public array $sexes = [];
    public array $states = [];

    public function mount()
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

    }

    public function create(): void
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
                'animalSex' => ['required', 'in:male,female'],
                'animalType' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAttitude' => ['required', 'string', 'max:255'],
                'animalImages' => ['array', 'max:4'],
                'animalImages.*' => ['max:2048'],
            ]);
        $imagesUrl = [];
        foreach ($this->animalImages as $image) {
            $file_name = uniqid() . '.jpg';
            Storage::disk('public')->putFileAs(
                'animals',
                $image,
                $file_name
            );

            $imagesUrl[] = $file_name;
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

        $this->redirect(route('animals.index', ['locale' => app()->getLocale()]));
    }
};
