<?php
/*
 * This file is a part of the CKFinder bundle for Symfony.
 *
 * Copyright (C) 2016, CKSource - Frederico Knabben. All rights reserved.
 *
 * Licensed under the terms of the MIT license.
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace CKSource\Bundle\CKFinderBundle\Tests\Config\Definition;

use CKSource\Bundle\CKFinderBundle\Config\Definition\VariableArrayNode;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class VariableArrayNodeTest extends TestCase
{
    public function testNormalizeThrowsExceptionIfValueIsNotArray(): void
    {
        $this->expectException(\Symfony\Component\Config\Definition\Exception\InvalidTypeException::class);

        $node = new VariableArrayNode('root');
        $node->normalize('foo');
    }

    /**
     * Test merging.
     */
    public function testMerge(): void
    {
        $builder = new TreeBuilder('root');
        $rootNode = $builder->getRootNode();

        $tree = $rootNode
                ->children()
                    ->setNodeClass('variableArray', \CKSource\Bundle\CKFinderBundle\Config\Definition\Builder\VariableArrayNodeDefinition::class)
                    ->node('foo', 'scalar')->end()
                    ->node('bar', 'scalar')->end()
                    ->node('extra', 'variableArray')->end()
                ->end()
            ->end()
            ->buildTree();

        $a = [
            'foo' => 'bar',
            'extra' => [
                'foo' => 'a',
                'bar' => 'b',
            ],
        ];

        $b = [
            'foo' => 'moo',
            'bar' => 'b',
            'extra' => [
                'foo' => 'c',
                'baz' => 'd',
            ],
        ];

        $expected = [
            'foo' => 'moo',
            'bar' => 'b',
            'extra' => [
                'foo' => 'c',
                'bar' => 'b',
                'baz' => 'd',
            ],
        ];

        static::assertEquals($expected, $tree->merge($a, $b));
    }

    /**
     * Test merging when used as a prototype.
     */
    public function testMergeWhenUsedAsAPrototype(): void
    {
        $builder = new TreeBuilder('root');
        $rootNode = $builder->getRootNode();

        $tree = $rootNode
                ->children()
                    ->setNodeClass('variableArray', \CKSource\Bundle\CKFinderBundle\Config\Definition\Builder\VariableArrayNodeDefinition::class)
                    ->node('foo', 'scalar')->end()
                    ->node('bar', 'scalar')->end()
                    ->arrayNode('backends')
                        ->useAttributeAsKey('name', false)
                        ->prototype('variableArray')
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree();

        $a = [
            'foo' => 'bar',
            'backends' => [
                'cache' => [
                    'name' => 'cache',
                    'adapter' => 'local',
                    'root' => '/foo',
                ],
                'default' => [
                    'name' => 'default',
                    'adapter' => 'local',
                    'root' => '/bar',
                ],
            ],
        ];

        $b = [
            'foo' => 'moo',
            'backends' => [
                'cache' => [
                    'adapter' => 's3',
                ],
                'default' => [
                    'root' => '/bar/baz',
                ],
                'another' => [
                    'name' => 'another',
                    'adapter' => 's3',
                ],
            ],
        ];

        $expected = [
            'foo' => 'moo',
            'backends' => [
                'cache' => [
                    'name' => 'cache',
                    'adapter' => 's3',
                    'root' => '/foo',
                ],
                'default' => [
                    'name' => 'default',
                    'adapter' => 'local',
                    'root' => '/bar/baz',
                ],
                'another' => [
                    'name' => 'another',
                    'adapter' => 's3',
                ],
            ],
        ];

        static::assertEquals($expected, $tree->merge($a, $b));
    }

    /**
     * Test node finalization.
     */
    public function testFinalizeValue(): void
    {
        $node = new VariableArrayNode('foo', null);
        static::assertSame(['a' => 'b'], $node->finalize(['a' => 'b']));
    }

    /**
     * Test node finalization without required keys present.
     */
    public function testFinalizeValueWithoutRequiredKeys(): void
    {
        $this->expectExceptionMessage('The key "bar" at path "foo" must be configured.');
        $this->expectException(\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException::class);
        $node = new VariableArrayNode('foo', null, ['bar']);
        $node->finalize(['a' => 'b']);
    }
}
