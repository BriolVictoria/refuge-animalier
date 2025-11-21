<?php


it(
    'displays the homepage',
    function () {
        //Act
        $response = $this->get(route('public.homepage')) ;

        // Assert
        $response->assertStatus(200);

    }
);

