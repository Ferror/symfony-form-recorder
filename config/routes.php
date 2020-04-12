<?php

use App\Controller\DefaultController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    $routes->add('index', '/')
        // the controller value has the format [controller_class, method_name]
        ->controller([DefaultController::class, 'index'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the ', method_name]' part:
        // ->controller([BlogController::class])
    ;
};
