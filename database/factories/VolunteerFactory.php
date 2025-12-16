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
        $name = ['Lorian Flamant', 'Ambre Smith', 'Victoria Briol'];
        $email = ['lorian.flamant@gmail.com', 'ambre.smith@gmail.com', 'victoria.briol@gmail.com'];
        $phone_number = ['04 70/85/96/85/78/96', '04 78 85/36/96/25/41', '04 75/96/32/74/10/25'];
        $disponibilities = ['Lun, Mer, Jeu', 'Lun, Mar, Ven', 'Lun, Mar, Mer'];

        return [
            'name' => $this->faker->randomElement($name),
            'email' => $this->faker->randomElement($email),
            'phone_number' => $this->faker->randomElement($phone_number),
            'disponibilities' => $this->faker->randomElement($disponibilities),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
