<?php

use Illuminate\Support\Carbon;
use Livewire\Component;

new class extends Component {
    public string $animalName;
    public string $animalRace = 'Golden';
    public string $animalVaccine = 'Vacciné';
    public string $animalAge;
    public string $animalCoat;
    public string $animalState = 'En attente d’adoption';
    public string $animalSex = 'Mâle';
    public string $animalType = 'Chien';
    public string $animalTrait;

    public function create(): void
    {
        $this->validate(
            [
                'animalName' => ['required', 'string', 'max:255'],
                'animalRace' => ['required', 'string', 'max:255'],
                'animalVaccine' => ['required', 'string', 'max:255'],
                'animalAge' => ['required', 'max:255'],
                'animalCoat' => ['required', 'string', 'max:255'],
                'animalState' => ['required', 'string', 'max:255'],
                'animalSex' => ['required', 'string', 'max:255'],
                'animalType' => ['required', 'string', 'max:255'],
                'animalTrait' => ['required', 'string', 'max:255'],
            ]
        );

        \App\Models\Animal::create(
            [
                'name' => $this->animalName,
                'breed' => $this->animalRace,
                'vaccine' => $this->animalVaccine,
                'age' => $this->animalAge,
                'coat' => $this->animalCoat,
                'state' => $this->animalState,
                'sex' => $this->animalSex,
                'type' => $this->animalType,
                'trait' => $this->animalTrait,
            ]
        );

        $this->redirect(route('animals.index'));
    }
};
