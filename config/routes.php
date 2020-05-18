<?php

use Slim\App;

return function (App $app) {
    // Ejemplo de Action devolviendo http
    $app->get( '/', \App\Action\HomeAction::class );

    // Ejemplo de Action devolviendo json
    $app->get( '/json', \App\Action\JsonAction::class );

    // Ejemplo de ruta para POST  (probar con POSTMAN)
    $app->post('/users', \App\Action\UserCreateAction::class);
};
