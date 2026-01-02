<?php

test('the application returns a successful response', function () {
    $locale = App::getLocale();
    $response = $this->get("/{$locale}/");

    $response->assertStatus(200);
});
