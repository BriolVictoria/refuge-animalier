<?php

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

