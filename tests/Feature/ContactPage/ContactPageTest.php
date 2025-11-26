<?php

it(
    'displays the contactpage',
    function (){
        //Act
        $response = $this->get(route('public.contactpage'));

        //Assert
        $response->assertStatus(200);
    }
);
