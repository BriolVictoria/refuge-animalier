<?php

namespace Database\Factories;

use App\Enums\AdoptingEnvironement;
use App\Enums\AdoptingState;
use App\Enums\TrueOrFalse;
use App\Models\Adopting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdoptingFactory extends Factory
{
    protected $model = Adopting::class;

    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'other_animal' => $this->faker->randomElement(TrueOrFalse::cases()),
            'children' => $this->faker->randomElement(TrueOrFalse::cases()),
            'environment' => $this->faker->randomElement(AdoptingEnvironement::cases()),
            'outside' => $this->faker->randomElement(TrueOrFalse::cases()),
            'creation_date' => $this->faker->date(),
            'state' => $this->faker->randomElement(AdoptingState::cases()),
            'comment' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
