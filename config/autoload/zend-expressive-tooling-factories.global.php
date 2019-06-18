<?php
/**
 * This file generated by Zend\Expressive\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via zend-expressive-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Handler\HomeHandler::class => App\Handler\HomeHandlerFactory::class,
            App\Handler\PerformanceHandler::class => App\Handler\PerformanceHandlerFactory::class,
        ],
    ],
];
