<?php

namespace _CKFinder_Vendor_Prefix\Aws;

use _CKFinder_Vendor_Prefix\Psr\Http\Message\ResponseInterface;
interface ResponseContainerInterface
{
    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse();
}
