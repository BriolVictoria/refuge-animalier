<?php

it(
    'displays the aboutpage',
    function () {
        //Act
        $response = $this->get(route('public.aboutpage')) ;

        // Assert
        $response->assertStatus(200);

    }
);
