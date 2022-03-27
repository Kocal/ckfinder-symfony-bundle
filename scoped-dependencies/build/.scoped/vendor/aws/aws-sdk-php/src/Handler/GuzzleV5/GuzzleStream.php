<?php

namespace _CKFinder_Vendor_Prefix\Aws\Handler\GuzzleV5;

use _CKFinder_Vendor_Prefix\GuzzleHttp\Stream\StreamDecoratorTrait;
use _CKFinder_Vendor_Prefix\GuzzleHttp\Stream\StreamInterface as GuzzleStreamInterface;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\StreamInterface as Psr7StreamInterface;
/**
 * Adapts a PSR-7 Stream to a Guzzle 5 Stream.
 *
 * @codeCoverageIgnore
 */
class GuzzleStream implements GuzzleStreamInterface
{
    use StreamDecoratorTrait;
    /** @var Psr7StreamInterface */
    private $stream;
    public function __construct(Psr7StreamInterface $stream)
    {
        $this->stream = $stream;
    }
}
