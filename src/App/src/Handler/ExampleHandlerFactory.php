<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;

class ExampleHandlerFactory
{
    public function __invoke(ContainerInterface $container) : ExampleHandler
    {
        return new ExampleHandler();
    }
}
