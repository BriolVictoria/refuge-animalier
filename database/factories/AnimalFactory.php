<?php

namespace Database\Factories;

use App\Enums\AnimalSex;
use App\Enums\AnimalStates;
use App\Enums\AnimalVaccine;
use App\Enums\Type;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        $coat = ['Beige', 'Blue', 'Rouge', 'Blanc', 'Taché', 'Noir', 'Gris'];
        $attitude = ['Il est très gentil et calme', 'Très énergique, gentil et en manque d‘affection', 'Il est sympa'];

        return [
            'images' => null,
            'name' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(1, 10),
            'breed' => $this->faker->text('5'),
            'date' => $this->faker->date(),
            'coat' => $this->faker->randomElement($coat),
            'state' => $this->faker->randomElement(AnimalStates::cases()),
            'sex' => $this->faker->randomElement(AnimalSex::cases()),
            'vaccine' => $this->faker->randomElement(AnimalVaccine::cases()),
            'type' => $this->faker->randomElement(Type::cases()),
            'attitude' => $this->faker->randomElement($attitude),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
