<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function(ContainerConfigurator $configurator) {
    // default configuration for services in *this* file
    $services = $configurator
        ->services()
        ->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set('SensioLabs\\Security\\SecurityChecker', null);
    $services->set('SensioLabs\\Security\\Command\\SecurityCheckerCommand', null);

    // makes classes in src/ available to be used as services
    // this creates a service per class whose id is the fully-qualified class name
    $services
        ->load('Ferror\\', '../src/*')
        ->exclude('../src/Symfony/Kernel.php');
};
