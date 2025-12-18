<?php

use App\Models\Adopting;
use App\Models\Animal;
use App\Models\Availability;
use App\Models\Volunteer;

it(
    'verify if a availability is related to a volunteer',
    function () {
       $volunteer = Volunteer::factory()->create();

       $availability = Availability::factory()->for($volunteer)->create();

       expect($volunteer->availability()->count())->toBe(1)
       ->and($availability->monday)->toBe($volunteer->availability()->first()->monday);

    }
);

it(
    'verify if an adopting is related to an animal',
    function () {
        $animal = Animal::factory()->create();

        $adopting = Adopting::factory()->for($animal)->create();

        expect($animal->adopting()->count())->toBe(1);
    }
);



