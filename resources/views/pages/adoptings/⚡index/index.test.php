<?php

use App\Models\Adopting;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptings.index')
        ->assertStatus(200);
});

it('shows adoption request in admin adoptings index',
    function () {
        $admin = \App\Models\User::factory()->create();
        $this->actingAs($admin);

        $animal = \App\Models\Animal::factory()->create();
        $adopting = Adopting::factory()->create([
            'animal_id' => $animal->id,
            'email' => 'john.doe@gmail.com'
        ]);

        Livewire::actingAs($admin)->test('pages::adoptings.index')->assertSee($adopting->last_name)->assertSee($adopting->first_name)->assertSee($animal->name);;
    }
);
