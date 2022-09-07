<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Stub;

use Psr\Cache\CacheItemInterface;

class DummyCacheItem implements CacheItemInterface
{
    private string $key;
    private $value = null;
    private bool $isHit = false;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function get(): mixed
    {
        if (!$this->isHit()) {
            return null;
        }
    }

    public function isHit(): bool
    {
        return $this->isHit;
    }

    public function set(mixed $value)
    {
        $this->value = $value;

        return $this;
    }

    public function expiresAt($expiration)
    {
        return $this;
    }

    public function expiresAfter($time)
    {
        return $this;
    }
}
