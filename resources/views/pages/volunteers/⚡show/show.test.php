<?php

use App\Models\User;
use App\Models\Volunteer;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $volunteer = Volunteer::factory()->create();
    Livewire::test('pages::volunteers.show', ['id' => $volunteer->id])
        ->assertStatus(200);
});
