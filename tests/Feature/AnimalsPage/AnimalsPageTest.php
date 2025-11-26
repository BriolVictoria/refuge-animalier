<?php

use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class); /*Sinon ça ne amrche pas. Ca lance toutes les migrations avant le test*/

it(
    'displays the animals index page',
    function () {
        //Act
        $response = $this->get(route('public.animals.index'));

        // Assert
        $response->assertStatus(200);

    }
);

it(
    'verifies if the animals that we see on the index page have the state ‘available‘',
    function () {

        /*3 animaux avec le statut disponible*/
        Animal::factory()->count(3)->create([
            'state' => \App\Enums\AnimalStates::Available->value,
        ]);

        /*Créer un animal pour les autres statut de enums*/
        foreach (\App\Enums\AnimalStates::cases() as $animalStates) {
            if ($animalStates !== \App\Enums\AnimalStates::Available) {
                Animal::factory()->create(['state' => $animalStates->value]);
            }
        }

        /*Voir dan sla page*/
        $response = $this->get(route('public.animals.index'));

        $response->assertStatus(200);

        /*Regarder si on reçoit Available*/
        $response->assertSee(\App\Enums\AnimalStates::Available->value);

        /*Regarder qu'on ne reçoivent pas les autres*/
        foreach (\App\Enums\AnimalStates::cases() as $animalStates) {
            if ($animalStates !== \App\Enums\AnimalStates::Available) {
                $response->assertDontSee($animalStates->value);
            }
        }


    }
);

it(
    'verifies if the animal that we see on the show page have the correct information',
    function () {

        $animal = Animal::factory()->create()->toArray();
        $other_animal = Animal::factory()->create()->toArray();

        //Act
        $response = $this->get(route('public.animals.show', $animal['id']));

        $response->assertStatus(200);

        $response->assertSee($animal['name']);
        $response->assertDontSee($other_animal['name']);
    }
);


