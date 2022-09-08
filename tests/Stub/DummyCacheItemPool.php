<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Stub;

use CKSource\Bundle\CKFinderBundle\Cache\Psr6\CacheItemCompatibilityBridge;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class DummyCacheItemPool implements CacheItemPoolInterface
{
    /** @var array<string,DummyCacheItem>  */
    private array $cache = [];

    public function getItem(string $key): CacheItemInterface
    {
        if (!isset($this->cache[$key])) {
            $this->cache[$key] = new DummyCacheItem($key);
        }

        return $this->cache[$key];
    }

    /**
     * @param list<string> $keys
     * @return iterable<CacheItemCompatibilityBridge>
     */
    public function getItems(array $keys = []): iterable
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function hasItem(string $key): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function clear(): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function deleteItem(string $key): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function deleteItems(array $keys): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function save(CacheItemInterface $item): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function saveDeferred(CacheItemInterface $item): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function commit(): bool
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }
}
