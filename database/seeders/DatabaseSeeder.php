<?php

namespace Database\Seeders;

use App\Models\Adopting;
use App\Models\Animal;
use App\Models\Availability;
use App\Models\Message;
use App\Models\Note;
use App\Models\notification;
use App\Models\User;
use App\Models\Visit;
use App\Models\Volunteer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Ambre Smith',
            'email' => 'ambre.smith@gmail.com',
            'password' => password_hash('123', PASSWORD_BCRYPT),
        ]);


        Animal::factory(50)
            ->has(Adopting::factory(1))
            ->has(Note::factory()->count(18))
            ->create();

        Volunteer::factory(50)->has(Availability::factory(1))->create();

        Message::factory(50)->create();

        Notification::factory(50)->create();

    }
}
