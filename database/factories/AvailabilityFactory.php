<?php

namespace Database\Factories;

use App\Models\Availability;
use App\Enums\AvailabilitySelect;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AvailabilityFactory extends Factory
{
    protected $model = Availability::class;

    public function definition(): array
    {

        $availability = [AvailabilitySelect::NotAvailable->value, AvailabilitySelect::AvailableDuringTheDay->value, AvailabilitySelect::AvailableInTheMorning->value, AvailabilitySelect::AvailableInTheEvening->value];

        return [
            'monday' => $this->faker->randomElement($availability),
            'tuesday' => $this->faker->randomElement($availability),
            'wednesday' => $this->faker->randomElement($availability),
            'thursday' => $this->faker->randomElement($availability),
            'friday' => $this->faker->randomElement($availability),
            'saturday' => $this->faker->randomElement($availability),
            'sunday' => $this->faker->randomElement($availability),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
