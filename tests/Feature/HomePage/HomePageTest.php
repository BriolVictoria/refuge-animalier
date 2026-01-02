<?php


it(
    'displays the homepage',
    function () {
        //Act
        $response = $this->get(route('public.homepage', ['locale' => app()->getLocale()])) ;

        // Assert
        $response->assertStatus(200);

    }
);

