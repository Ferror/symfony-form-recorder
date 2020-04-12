<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function(ContainerConfigurator $configurator) {
    // default configuration for services in *this* file
    $services = $configurator
        ->services()
        ->defaults()
        ->autowire()
        ->autoconfigure();

    // makes classes in src/ available to be used as services
    // this creates a service per class whose id is the fully-qualified class name
    $services
        ->load('App\\', '../src/*')
        ->exclude('../src/{DependencyInjection,Entity,Migrations,Tests,Kernel.php}');
};