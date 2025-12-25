<?php

namespace Database\Factories;

use App\Enums\MessageState;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'object' => $this->faker->sentence('5'),
            'text' => $this->faker->text(),
            'date' => $this->faker->date(),
            'state' => $this->faker->randomElement(MessageState::cases()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
