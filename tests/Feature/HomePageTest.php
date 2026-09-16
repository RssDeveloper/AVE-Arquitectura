<?php

test('home page renders successfully with projects and courses', function () {
    $this->seed();

    $response = $this->get('/');

    $response->assertOk()
        ->assertViewIs('welcome')
        ->assertViewHas('featuredProjects')
        ->assertViewHas('activeCourses')
        ->assertSee('AVE Arquitectura')
        ->assertSee('Casa Ramos')
        ->assertSee('Residencia RECA')
        ->assertSee('Modelado con SketchUp');
});
