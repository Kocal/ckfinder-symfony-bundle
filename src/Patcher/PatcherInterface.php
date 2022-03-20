<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

interface PatcherInterface
{
    public function patch(string $connectorPath): void;
}