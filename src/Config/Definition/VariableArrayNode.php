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

namespace CKSource\Bundle\CKFinderBundle\Config\Definition;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Definition\Exception\InvalidTypeException;
use Symfony\Component\Config\Definition\NodeInterface;
use Symfony\Component\Config\Definition\VariableNode;

/**
 * This node represents an array with arbitrary structure.
 *
 * Any array type is accepted as a value.
 */
class VariableArrayNode extends VariableNode
{
    /**
     * @param list<string> $requiredKeys keys required in variable array node
     */
    public function __construct(
        ?string $name,
        NodeInterface $parent = null,
        protected array $requiredKeys = []
    ) {
        parent::__construct($name, $parent);
    }

    protected function validateType(mixed $value): void
    {
        if (!is_array($value)) {
            $ex = new InvalidTypeException(sprintf(
                'Invalid type for path "%s". Expected array, but got %s',
                $this->getPath(),
                gettype($value)
            ));
            if ($hint = $this->getInfo()) {
                $ex->addHint($hint);
            }
            $ex->setPath($this->getPath());

            throw $ex;
        }
    }

    protected function finalizeValue(mixed $value): mixed
    {
        if (!is_array($value)) {
            throw new InvalidConfigurationException('Value is not an array.');
        }
        foreach ($this->requiredKeys as $requiredKey) {
            if (!array_key_exists($requiredKey, $value)) {
                $msg = sprintf('The key "%s" at path "%s" must be configured.', $requiredKey, $this->getPath());
                $ex = new InvalidConfigurationException($msg);
                $ex->setPath($this->getPath());

                throw $ex;
            }
        }

        return parent::finalizeValue($value);
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed[]
     */
    protected function mergeValues(mixed $leftSide, mixed $rightSide): array
    {
        if (!is_array($leftSide)) {
            throw new InvalidConfigurationException('Left side is not an array.');
        }

        if (!is_array($rightSide)) {
            throw new InvalidConfigurationException('Right side is not an array.');
        }

        return array_replace_recursive($leftSide, $rightSide);
    }
}
