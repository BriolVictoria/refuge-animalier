<?php

use App\Enums\RoleUser;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create(['role' => RoleUser::Volunteer->value, ]);
    $this->actingAs($user);
    Livewire::test('pages::settings')
        ->assertStatus(200)->assertSet('userRole', RoleUser::Volunteer->value);
});
