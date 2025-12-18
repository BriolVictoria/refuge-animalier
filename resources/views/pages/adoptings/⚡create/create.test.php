<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptings.create')
        ->assertStatus(200);
});
