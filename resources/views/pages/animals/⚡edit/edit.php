<?php

use App\Models\Animal;
use Livewire\Component;

new class extends Component {
    public Animal $animal;

    public string $animalName;
    public string $animalRace;
    public string $animalVaccine;
    public string $animalAge;
    public string $animalCoat;
    public string $animalState;
    public string $animalSex;
    public string $animalType;
    public string $animalTrait;

    public function mount($id): void
    {
        $this->animal = Animal::find($id);

        $this->animalName = $this->animal->name;
        $this->animalRace = $this->animal->breed;
        $this->animalCoat = $this->animal->coat;
        $this->animalAge = $this->animal->age;
        $this->animalState = $this->animal->state;
        $this->animalSex = $this->animal->sex;
        $this->animalVaccine = $this->animal->vaccine;
        $this->animalType = $this->animal->type;
        $this->animalTrait = $this->animal->trait;
    }
};
