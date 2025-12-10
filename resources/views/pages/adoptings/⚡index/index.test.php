<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptings.index')
        ->assertStatus(200);
});
