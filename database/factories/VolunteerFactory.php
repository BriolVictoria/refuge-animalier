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
        $last_name = ['Flamant', 'Smith', 'Briol'];
        $first_name = ['Lorian', 'Ambre', 'Victoria'];
        $email = ['lorian.flamant@gmail.com', 'ambre.smith@gmail.com', 'victoria.briol@gmail.com'];
        $phone_number = ['0470 85 96 85', '0478 85 36 96', '0475 96 32 74'];
        $adresse = ['Rue des Lilas 50', 'Rue des Tulippes 58', 'Rue des truc 78'];
        $postal_code = ['1234', '4321', '5678'];
        $password = ['123456789', 'azerty', '2406'];
        $town = ['Londres', 'New-York', 'Paris'];

        return [
            'last_name' => $this->faker->randomElement($last_name),
            'first_name' => $this->faker->randomElement($first_name),
            'email' => $this->faker->randomElement($email),
            'phone_number' => $this->faker->randomElement($phone_number),
            'adresse' => $this->faker->randomElement($adresse),
            'postal_code' => $this->faker->randomElement($postal_code),
            'password' => $this->faker->randomElement($password),
            'town' => $this->faker->randomElement($town),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
