<?php

namespace _CKFinder_Vendor_Prefix\GuzzleHttp;

use _CKFinder_Vendor_Prefix\Psr\Http\Message\MessageInterface;
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message) : ?string;
}
