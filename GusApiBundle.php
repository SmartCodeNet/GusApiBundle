<?php

namespace SmartCodeNet\GusApiBundle;

use SmartCodeNet\GusApiBundle\DependencyInjection\GusApiBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use SmartCodeNet\GusApiBundle\DependencyInjection\Compiler\GusApiConfigurationPass;

class GusApiBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new GusApiConfigurationPass());
    }

    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        return new GusApiBundleExtension();
    }
}
