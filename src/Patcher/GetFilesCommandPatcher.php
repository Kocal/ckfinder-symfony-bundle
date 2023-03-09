<?php

declare(strict_types=1);

namespace CKSource\Bundle\CKFinderBundle\Patcher;

class GetFilesCommandPatcher implements PatcherInterface
{
    use PatcherTrait;

    public function patch(string $connectorPath): void
    {
        $this->patchFile(
            $connectorPath . '/Command/GetFiles.php',
            "        \$data = new \\stdClass();",
            "        \$commandConfig = \$this->app['config']->get('commands')['GetFiles'] ?? [];\n        \$data = new \\stdClass();",
        );

        $this->patchFile(
            $connectorPath . '/Command/GetFiles.php',
            "        \$files = \$workingFolder->listFiles();",
            <<<'PHP'
        $files = $workingFolder->listFiles();
        
        if (is_int($commandConfig['returnMaxLastFiles'] ?? null)) {
            usort($files, function ($a, $b) {
                return $b['timestamp'] <=> $a['timestamp'];
            });
            
            $files = array_slice($files, 0, $commandConfig['returnMaxLastFiles']);
        }
PHP,
        );
    }
}
