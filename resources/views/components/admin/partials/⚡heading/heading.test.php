<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('admin::partials.heading')
        ->assertStatus(200);
});
