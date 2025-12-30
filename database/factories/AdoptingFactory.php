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
        $true_or_false = [TrueOrFalse::Yes->value, TrueOrFalse::No->value];
        $adopting_environment = [AdoptingEnvironement::House->value, AdoptingEnvironement::FlatShare->value, AdoptingEnvironement::FlatShare->value, AdoptingEnvironement::Other->value, AdoptingEnvironement::Studio->value];
        $adopting_state = [AdoptingState::Pending->value, AdoptingState::Done->value, AdoptingState::InProgress->value];

        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'other_animal' => $this->faker->randomElement($true_or_false),
            'children' => $this->faker->randomElement($true_or_false),
            'environment' => $this->faker->randomElement($adopting_environment),
            'outside' => $this->faker->randomElement($true_or_false),
            'creation_date' => $this->faker->date(),
            'state' => $this->faker->randomElement($adopting_state),
            'comment' => $this->faker->word(),
            'animal_id' => \App\Models\Animal::inRandomOrder()->first()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
