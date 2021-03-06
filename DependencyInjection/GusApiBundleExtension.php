<?php

namespace SmartCodeNet\GusApiBundle\DependencyInjection;

use SmartCodeNet\GusApiBundle\Factory\GusFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class GusApiBundleExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition(GusFactory::class);
        $definition->replaceArgument(0, $config['user_key']);
        $definition->replaceArgument(1, $config['is_develop_key']);
    }
}
