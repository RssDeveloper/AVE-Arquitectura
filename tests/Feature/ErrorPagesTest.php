<?php

test('404 error page renders custom view on non-existent route', function () {
    $response = $this->get('/ruta-inexistente-para-prueba-404');

    $response->assertStatus(404)
        ->assertSee('404')
        ->assertSee('Plano No Encontrado')
        ->assertSee('Espacio')
        ->assertSee('Volver al Inicio');
});

test('403 error view renders forbidden layout and messages correctly', function () {
    $view = $this->view('errors.403');

    $view->assertSee('403')
        ->assertSee('Zona Restringida')
        ->assertSee('Acceso')
        ->assertSee('Volver al Inicio');
});

test('500 error view renders server error layout and messages correctly', function () {
    $view = $this->view('errors.500');

    $view->assertSee('500')
        ->assertSee('Falla Estructural')
        ->assertSee('Reintentar Carga')
        ->assertSee('Volver al Inicio');
});

test('419 error view renders page expired layout and messages correctly', function () {
    $view = $this->view('errors.419');

    $view->assertSee('419')
        ->assertSee('Sesión Caducada')
        ->assertSee('Recargar Página')
        ->assertSee('Volver al Inicio');
});
