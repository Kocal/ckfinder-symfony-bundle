<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

use Symfony\Component\Filesystem\Filesystem;

trait PatcherTrait
{
    private function patchFile(string $file, string $search, string $replace): void
    {
        static $fs = null;
        $fs ??= new Filesystem();

        if (!$fs->exists($file)) {
            throw new \RuntimeException(sprintf('File "%s" does not exist.', $file));
        }

        if (false === $content = file_get_contents($file)) {
            throw new \RuntimeException(sprintf('Unable to get contents of file "%s".', $file));
        }

        if (!str_contains($content, $search)) {
            throw new \RuntimeException(sprintf('File "%s" does not contains content to replace "%s".', $file, $search));
        }

        $fs->dumpFile($file, str_replace($search, $replace, $content));
    }
}
