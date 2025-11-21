<?php

/*  */

it(
    'create the homepage',
    function () {
        //Act
        $response = $this->get(route('public.homepage')) ;

        // Assert
        $response->assertStatus(200);

    }
);

