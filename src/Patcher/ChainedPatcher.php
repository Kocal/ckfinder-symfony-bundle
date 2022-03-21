<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

class ChainedPatcher implements PatcherInterface
{
    /**
     * @param iterable<PatcherInterface> $patchers
     */
    public function __construct(
        private iterable $patchers,
    ) {
    }

    public function patch(string $connectorPath): void
    {
        foreach ($this->patchers as $patcher) {
            $patcher->patch($connectorPath);
        }
    }
}
