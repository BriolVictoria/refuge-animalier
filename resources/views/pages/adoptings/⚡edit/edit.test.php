<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptings.edit')
        ->assertStatus(200);
});
