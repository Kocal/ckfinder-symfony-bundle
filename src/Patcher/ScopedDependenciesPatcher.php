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
            ->contains([
                'use League\\', ' \\League',
                'use Psr\\', ' \\Psr',
            ]);

        foreach ($files as $file) {
            $this->patchFile($file, 'use League\\', 'use \\' . self::PREFIX . '\\League\\', false);
            $this->patchFile($file, ' \\League\\', ' \\' . self::PREFIX . '\\League\\', false);
            $this->patchFile($file, 'use Psr\\', 'use \\' . self::PREFIX . '\\Psr\\', false);
            $this->patchFile($file, ' \\Psr\\', ' \\' . self::PREFIX . '\\Psr\\', false);
        }
    }
}
