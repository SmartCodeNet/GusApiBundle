<?php

namespace SmartCodeNet\GusApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('gus_bundle');

        $treeBuilder
            ->getRootNode()
            ->children()
            ->scalarNode('user_key')->defaultValue('abcde12345abcde12345')->cannotBeEmpty()->end()
            ->booleanNode('is_develop_key')->defaultFalse()->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
