<?php

namespace SmartCodeNet\GusApiBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class GusApiConfigurationPass implements CompilerPassInterface
{
    public function process(
        ContainerBuilder $container
    ): void {
        $container->getDefinition('gusapibundle.gus_factory')->setPublic(true);
    }
}