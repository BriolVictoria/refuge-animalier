<?php

namespace Database\Factories;

use App\Enums\AnimalStates;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        $name = ['Sol', 'Pedro', 'Pascal', 'Luna', 'Simon', 'Stéphanie', 'Gertrude'];
        $breed = ['Golden', 'Cocker', 'Berger Australien', 'Border collie', 'Berger Américain', 'American staff', 'Bichon'];
        $coat = ['Beige', 'Blue', 'Rouge', 'Blanc', 'Taché', 'Noir', 'Gris'];
        $attitude = ['Calme', 'Méchant', 'Sympa', 'Drôle', 'Timide', 'Compliqué', 'Ca va'];

        return [
            'image_path' => asset('assets/img/image_animal.png'),
            'name' => $this->faker->randomElement($name),
            'age' => $this->faker->numberBetween(1, 10),
            'breed' => $this->faker->randomElement($breed),
            'coat' => $this->faker->randomElement($coat),
            'attitude' => $this->faker->randomElement($attitude),
            'state' => AnimalStates::Available,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
