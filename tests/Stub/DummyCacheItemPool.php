<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Stub;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class DummyCacheItemPool implements CacheItemPoolInterface
{
    /** @var array<string,DummyCacheItem>  */
    private array $cache = [];

    public function getItem($key)
    {
        if (!isset($this->cache[$key])) {
            $this->cache[$key] = new DummyCacheItem($key);
        }

        return $this->cache[$key];
    }

    /**
     * @param list<string> $keys
     * @return array<CacheItemInterface>|\Traversable<CacheItemInterface>
     */
    public function getItems(array $keys = [])
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function hasItem($key)
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function clear()
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function deleteItem($key)
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function deleteItems(array $keys)
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function save(CacheItemInterface $item)
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function saveDeferred(CacheItemInterface $item)
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }

    public function commit()
    {
        throw new \BadMethodCallException(sprintf('Method "%s" is not implemented.', __METHOD__));
    }
}
