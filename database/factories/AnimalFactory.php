<?php

namespace Database\Factories;

use App\Enums\AnimalSex;
use App\Enums\AnimalStates;
use App\Enums\AnimalVaccine;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        $breed = ['Golden', 'Cocker', 'Berger Australien', 'Border collie', 'Berger Américain', 'American staff', 'Bichon'];
        $coat = ['Beige', 'Blue', 'Rouge', 'Blanc', 'Taché', 'Noir', 'Gris'];
        $type = ['Lapin', 'Chien', 'Chat'];
        $attitude = ['Calme', 'Méchant', 'Sympa', 'Drôle', 'Timide', 'Compliqué', 'Ca va'];
        $trait = ['Il est très gentil et calme', 'Très énergique, gentil et en manque d‘affection', 'Il est sympa'];

        return [
            'image_path' => asset('assets/img/image_animal.png'),
            'name' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(1, 10),
            'breed' => $this->faker->randomElement($breed),
            'coat' => $this->faker->randomElement($coat),
            'attitude' => $this->faker->randomElement($attitude),
            'state' => $this->faker->randomElement(AnimalStates::cases()),
            'sex' => $this->faker->randomElement(AnimalSex::cases()),
            'vaccine' => $this->faker->randomElement(AnimalVaccine::cases()),
            'type' => $this->faker->randomElement($type),
            'trait' => $this->faker->randomElement($trait),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
