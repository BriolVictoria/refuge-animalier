<?php

it(
    'displays the contactpage',
    function (){
        //Act
        $response = $this->get(route('public.contactpage', ['locale' => app()->getLocale()]));

        //Assert
        $response->assertStatus(200);
    }
);

