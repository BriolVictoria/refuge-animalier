<?php

namespace Database\Factories;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VolunteerFactory extends Factory
{
    protected $model = Volunteer::class;

    public function definition(): array
    {

        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'adresse' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'password' => $this->faker->password(),
            'town' => $this->faker->city(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
