<?php

namespace Database\Factories;

use App\Models\notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NotificationFactory extends Factory
{
    protected $model = notification::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->sentence(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
