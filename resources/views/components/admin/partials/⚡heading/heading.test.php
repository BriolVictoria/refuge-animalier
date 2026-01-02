<?php

use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    Livewire::test('admin::partials.heading')
        ->assertStatus(200);
});
