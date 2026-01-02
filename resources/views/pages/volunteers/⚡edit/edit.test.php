<?php

use App\Models\Availability;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $volunteer = \App\Models\Volunteer::factory()->create();
    Availability::factory()->create([
        'volunteer_id' => $volunteer->id
    ]);

    Livewire::test('pages::volunteers.edit', ['id' => $volunteer->id])
        ->assertStatus(200);
});
