<?php

use App\Models\User;

it(
    'can display the login form',
    function () {
        //Act
        $response = $this->get('/login'); //rediriger vers login

        //Assert
        $response->assertSee('Connectez-vous pour continuer');

    }
);

it(
    'verifies if we are redirected to the dashboard after a successful request',
    function () {
        //Arrange
        $password = '123456789';
        $user = User::factory()->create([
            'name' => 'Ambre Smith',
            'email' => 'ambre.smith@gmail.com',
            'password' => Hash::make($password)
        ]);

        //Act
        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => $password,
        ]);

        //Assert
        $response->assertStatus(302);
    }
);
