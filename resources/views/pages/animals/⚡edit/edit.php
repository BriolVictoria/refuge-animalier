<?php

use App\Models\Animal;
use Livewire\Component;

new class extends Component {
    use \Livewire\WithFileUploads;
    public Animal $animal;

    public string $animalName;
    public array $animalImages = [];
    public string $animalRace;
    public string $animalVaccine;
    public string $animalAge;
    public string $animalCoat;
    public string $animalDate;

    public string $animalState;
    public string $animalSex;
    public string $animalType;
    public string $animalAttitude;


    public function mount($id): void
    {
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
        $this->animalImages = $this->animal->images ?? [];
    }

    public function update(): void
    {
        $this->validate(
            [
                'animalName' => ['required', 'string', 'max:255', 'min:2', 'alpha'],
                'animalRace' => ['required', 'string', 'max:255'],
                'animalVaccine' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAge' => ['required', 'integer', 'min:0', 'max:100'],
                'animalCoat' => ['required', 'string', 'max:255'], /*A voir*/
                'animalDate' => ['required', 'date'],
                'animalState' => ['required', 'string', 'max:255'], /*A voir*/
                'animalSex' => ['required', 'string', 'max:255'], /*A voir*/
                'animalType' => ['required', 'string', 'max:255'], /*A voir*/
                'animalAttitude' => ['required', 'string', 'max:255'],
                'animalImages.*' =>['image', 'max:2048'],
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

        $this->redirect(route('animals.show', $this->animal->id));
    }
};
