<?php

use App\Models\Adopting;
use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $animal = Animal::factory()->create();
    $adopting = Adopting::factory()->create(['animal_id' => $animal->id]);

    Livewire::test('pages::adoptings.edit', ['id' => $adopting->id])
        ->assertStatus(200);
});

