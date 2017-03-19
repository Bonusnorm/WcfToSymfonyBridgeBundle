<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('wcf_to_symfony_bridge', 'array');

        $rootNode
            ->children()
                ->scalarNode('table_prefix')->defaultValue('wcf1_')->end()
                ->scalarNode('cookie_prefix')->defaultValue('wcf_')->end()
                ->scalarNode('default_success_route')->defaultValue('homepage')->end()
                ->arrayNode('prefixed_entity_classes')
                    ->prototype('scalar')->end()
                ->end()
            ->end();


        return $treeBuilder;
    }
}
