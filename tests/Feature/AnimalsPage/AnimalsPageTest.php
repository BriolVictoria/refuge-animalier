<?php

use App\Enums\AnimalStates;
use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class); /*Sinon ça ne amrche pas. Ca lance toutes les migrations avant le test*/

it(
    'displays the animals index page',
    function () {
        //Act
        $response = $this->get(route('public.animals.index', ['locale' => app()->getLocale()]));

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
            if ($animalStates->value != \App\Enums\AnimalStates::Available->value) {
                Animal::factory()->create(['state' => $animalStates->value]);
            }
        }

        /*Voir dan sla page*/
        $response = $this->get(route('public.animals.index', ['locale' => app()->getLocale()]));

        $response->assertStatus(200);

        /*Regarder si on reçoit Available*/
        $availableStatut = __('Disponible');
        $response->assertSee($availableStatut);

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

        $animal = Animal::factory()->create();
        $other_animal = Animal::factory()->create();

        //Act
        $response = $this->get(route('public.animals.show', ['locale' => app()->getLocale(), 'animal' => $animal->id]));

        $response->assertStatus(200);

        $response->assertSee($animal['name']);
        $response->assertDontSee($other_animal['name']);
    }
);

it('creates an adoption request from animal page',
    function () {
        $animal = Animal::factory()->create();
        $this->post(route('public.animal.store',['locale' => app()->getLocale()]), [
            'animal_id'   => $animal->id,
            'first_name'  => 'John',
            'last_name'   => 'Doe',
            'email'       => 'john.doe@gmail.com',
            'phone'       => '0458 96 78 96',
            'address'     => 'Rue des Lilas',
            'city'        => 'Londres',
            'postal_code' => '1234',
            'message'     => 'Je souhaite adopter cet animal',
        ])->assertRedirect();

        $this->assertDatabaseHas('adoptings', [
           'email' => 'john.doe@gmail.com',
            'animal_id' => $animal->id,
        ]);
}
);


