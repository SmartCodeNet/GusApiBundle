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
            ->integerNode('user_key')->defaultValue('abcde12345abcde12345')->cannotBeEmpty()->end()
            ->scalarNode('is_develop_key')->defaultNull()->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
