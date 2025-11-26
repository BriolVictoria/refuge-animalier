<?php


it(
    'displays the volunteerpage',
    function () {
        //Act
        $response = $this->get(route('public.volunteerpage'));

        // Assert
        $response->assertStatus(200);

    }
);
