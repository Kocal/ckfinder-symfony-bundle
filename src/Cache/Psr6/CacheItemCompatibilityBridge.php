<?php

namespace CKSource\Bundle\CKFinderBundle\Cache\Psr6;

use _CKFinder_Vendor_Prefix\Psr\Cache\CacheItemInterface;

class CacheItemCompatibilityBridge implements CacheItemInterface
{
    public function __construct(
        private \Psr\Cache\CacheItemInterface $cacheItem,
    )
    {
    }

    public function getCacheItem() {
        return $this->cacheItem;
    }

    public function getKey()
    {
        return $this->cacheItem->getKey();
    }

    public function get()
    {
        return $this->cacheItem->get();
    }

    public function isHit()
    {
        return $this->cacheItem->isHit();
    }

    public function set($value)
    {
        return $this->cacheItem->set($value);
    }

    public function expiresAt($expiration)
    {
        return $this->cacheItem->expiresAt($expiration);
    }

    public function expiresAfter($time)
    {
        return $this->cacheItem->expiresAfter($time);
    }
}