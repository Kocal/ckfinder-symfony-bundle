<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

use Symfony\Component\Finder\Finder;

class ScopedDependenciesPatcher implements PatcherInterface
{
    use PatcherTrait;

    private const PREFIX = '_CKFinder_Vendor_Prefix';

    public function patch(string $connectorPath): void
    {
        $files = Finder::create()
            ->files()
            ->name('*.php')
            ->in($connectorPath)
            ->contains(['use League\\', ' \\League']);

        foreach ($files as $file) {
            $this->patchFile($file, 'use League\\', 'use \\' . self::PREFIX . '\\League\\', false);
            $this->patchFile($file, ' \\League\\', ' \\' . self::PREFIX . '\\League\\', false);
        }
    }
}
