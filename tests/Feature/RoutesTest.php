<?php

test('basic_routes', function () {
    // 1. példa
    $response = $this->get('/');
    $response->assertViewIs('welcome');

    // 2. példa
    $response = $this->get('/contact');
    $response->assertStatus(200);

    // 3. példa
    $response = $this->get('/contac');
    $response->assertNotFound();

    // 4. példa
    $response = $this->get('/pass-array');
    $response->assertOk();
    $response->assertSee('market');

    // 5. példa
    $response = $this->get('/request-test?title=MyFirstTitle');
    $response->assertSee('MyFirstTitle');
});
