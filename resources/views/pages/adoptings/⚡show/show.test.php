<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptings.show')
        ->assertStatus(200);
});
