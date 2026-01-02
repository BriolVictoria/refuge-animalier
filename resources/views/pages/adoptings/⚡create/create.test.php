<?php

use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;


it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $animal = Animal::factory()->create();

    Livewire::test('pages::adoptings.create')
        ->assertStatus(200);
});
