<?php

it(
    'displays the aboutpage',
    function () {
        //Act
        $response = $this->get(route('public.aboutpage', ['locale' => app()->getLocale()])) ;

        // Assert
        $response->assertStatus(200);

    }
);
