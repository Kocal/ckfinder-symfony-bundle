<?php

namespace CKSource\Bundle\CKFinderBundle\Cache\Psr6;


use _CKFinder_Vendor_Prefix\Psr\Cache\CacheItemInterface;
use _CKFinder_Vendor_Prefix\Psr\Cache\CacheItemPoolInterface;

/**
 * Makes a bridge between user-land psr/cache implementation and psr/cache from our scoped dependencies,
 * so that the user can use psr/cache v1, v2, or v3 without any issues.
 */
class CacheItemPoolCompatibilityBridge implements CacheItemPoolInterface
{
    public function __construct(
        private \Psr\Cache\CacheItemPoolInterface $cacheItemPool,
    ) {
    }

    public function getCacheItemPool(): \Psr\Cache\CacheItemPoolInterface
    {
        return $this->cacheItemPool;
    }

    public function getItem($key): CacheItemCompatibilityBridge
    {
        return new CacheItemCompatibilityBridge($this->cacheItemPool->getItem($key));
    }

    public function getItems(array $keys = []): iterable
    {
        return $this->cacheItemPool->getItems($keys);
    }

    public function hasItem($key): bool
    {
        return $this->cacheItemPool->hasItem($key);
    }

    public function clear(): bool
    {
        return $this->cacheItemPool->clear();
    }

    public function deleteItem($key): bool
    {
        return $this->cacheItemPool->deleteItem($key);
    }

    public function deleteItems(array $keys): bool
    {
        return $this->cacheItemPool->deleteItems($keys);
    }

    public function save(CacheItemInterface $item): bool
    {
        return $this->cacheItemPool->save($item->getCacheItem());
    }

    public function saveDeferred(CacheItemInterface $item): bool
    {
        return $this->cacheItemPool->saveDeferred($item->getCacheItem());
    }

    public function commit(): bool
    {
        return $this->cacheItemPool->commit();
    }
}