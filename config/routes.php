<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    // the controller value has the format [controller_class, method_name]
    $routes
        ->add('index', '/')
        ->controller([Ferror\Controller\DefaultController::class, 'index']);

    $routes
        ->add('form', '/submit')
        ->controller(\Ferror\Controller\SubmitController::class);
};
