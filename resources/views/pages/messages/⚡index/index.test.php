<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::messages.index', ['locale' => app()->getLocale()])
        ->assertStatus(200);
});
