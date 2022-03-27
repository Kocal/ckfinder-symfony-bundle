<?php

namespace _CKFinder_Vendor_Prefix\GuzzleHttp\Promise;

/**
 * Interface used with classes that return a promise.
 */
interface PromisorInterface
{
    /**
     * Returns a promise.
     *
     * @return PromiseInterface
     */
    public function promise();
}
