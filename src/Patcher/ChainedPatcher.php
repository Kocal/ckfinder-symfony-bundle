<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class ChainedPatcher implements PatcherInterface
{
    public function __construct(
        private iterable $patchers,
    )
    { }

    public function patch(string $connectorPath): void
    {
        foreach ($this->patchers as $patcher) {
            $patcher->patch($connectorPath);
        }
    }
}