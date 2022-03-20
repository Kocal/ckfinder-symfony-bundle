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

namespace CKSource\Bundle\CKFinderBundle\Config\Definition\Builder;

use CKSource\Bundle\CKFinderBundle\Config\Definition\VariableArrayNode;
use Symfony\Component\Config\Definition\Builder\VariableNodeDefinition;
use Symfony\Component\Config\Definition\VariableNode;

/**
 * Provides an interface for defining an array node with any values.
 */
class VariableArrayNodeDefinition extends VariableNodeDefinition
{
    /**
     * Keys required in variable array node.
     *
     * @var array
     */
    protected $requiredKeys = [];

    /**
     * {@inheritdoc}
     */
    protected function instantiateNode(): VariableNode
    {
        return new VariableArrayNode($this->name, $this->parent, $this->requiredKeys);
    }

    /**
     * Sets array keys that must be present.
     *
     * @return $this
     */
    public function requiresKeys(array $requiredKeys)
    {
        $this->requiredKeys = $requiredKeys;

        return $this;
    }
}
