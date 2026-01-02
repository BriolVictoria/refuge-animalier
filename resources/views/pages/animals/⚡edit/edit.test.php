<?php

use App\Models\Adopting;
use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $animal = Animal::factory()->create();
    Livewire::test('pages::animals.edit', ['id' => $animal->id])
        ->assertStatus(200);
});
