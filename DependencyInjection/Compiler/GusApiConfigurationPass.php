<?php

namespace SmartCodeNet\GusApiBundle\DependencyInjection\Compiler;

use SmartCodeNet\GusApiBundle\Factory\GusFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class GusApiConfigurationPass implements CompilerPassInterface
{
    public function process(
        ContainerBuilder $container
    ): void {
        $container->getDefinition(GusFactory::class)->setPublic(true);
    }
}