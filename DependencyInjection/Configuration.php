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
            ->integerNode('user_key')->isRequired()->cannotBeEmpty()->end()
            ->booleanNode('is_develop_key')->defaultNull()->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
