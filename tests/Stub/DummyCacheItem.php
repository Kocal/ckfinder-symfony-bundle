<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Stub;

use Psr\Cache\CacheItemInterface;

class DummyCacheItem implements CacheItemInterface
{
    private mixed $value = null;
    private bool $isHit = false;

    public function __construct(private string $key)
    {
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

        return $this->value;
    }

    public function isHit(): bool
    {
        return $this->isHit;
    }

    public function set(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function expiresAt($expiration): static
    {
        return $this;
    }

    public function expiresAfter($time): static
    {
        return $this;
    }
}
