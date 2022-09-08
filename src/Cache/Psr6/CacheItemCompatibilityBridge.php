<?php

namespace CKSource\Bundle\CKFinderBundle\Cache\Psr6;

use _CKFinder_Vendor_Prefix\Psr\Cache\CacheItemInterface;

class CacheItemCompatibilityBridge implements CacheItemInterface
{
    public function __construct(
        private \Psr\Cache\CacheItemInterface $cacheItem,
    ) {
    }

    public function getCacheItem(): \Psr\Cache\CacheItemInterface
    {
        return $this->cacheItem;
    }

    public function getKey(): string
    {
        return $this->cacheItem->getKey();
    }

    public function get()
    {
        return $this->cacheItem->get();
    }

    public function isHit(): bool
    {
        return $this->cacheItem->isHit();
    }

    public function set($value): \Psr\Cache\CacheItemInterface
    {
        return $this->cacheItem->set($value);
    }

    public function expiresAt($expiration): \Psr\Cache\CacheItemInterface
    {
        return $this->cacheItem->expiresAt($expiration);
    }

    public function expiresAfter($time): \Psr\Cache\CacheItemInterface
    {
        return $this->cacheItem->expiresAfter($time);
    }
}
