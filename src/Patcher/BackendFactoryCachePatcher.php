<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

class BackendFactoryCachePatcher implements PatcherInterface
{
    use PatcherTrait;

    public function patch(string $connectorPath): void
    {
        $this->patchFile(
            $connectorPath . '/Backend/BackendFactory.php',
            <<<'PHP'
        if (null === $cache) {
            $cache = new MemoryCache();
        }
PHP,
            <<<'PHP'
        if (null === $cache) {
            $cache = new MemoryCache();
        }

        if (\is_array($cacheConfig = $backendConfig['cache'] ?? null)) {
            switch ($cacheConfig['type'] ?? null) {
                case 'psr6':
                    $cache = new \League\Flysystem\Cached\Storage\Psr6Cache(
                        new \CKSource\Bundle\CKFinderBundle\Cache\Psr6\CacheItemPoolCompatibilityBridge($this->app['services_map']->get($cacheConfig['args']['pool'])),
                        $cacheConfig['args']['key'] ?? 'flysystem',
                        $cacheConfig['args']['expire'] ?? null
                    );
                    break;
                default:
                    throw new \RuntimeException(sprintf('Unknown cache type "%s".', $cacheConfig['type']));
            }
        }
PHP
        );
    }
}
