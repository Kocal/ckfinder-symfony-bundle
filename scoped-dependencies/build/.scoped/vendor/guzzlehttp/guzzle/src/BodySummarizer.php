<?php

namespace _CKFinder_Vendor_Prefix\GuzzleHttp;

use _CKFinder_Vendor_Prefix\Psr\Http\Message\MessageInterface;
final class BodySummarizer implements BodySummarizerInterface
{
    /**
     * @var int|null
     */
    private $truncateAt;
    public function __construct(int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message) : ?string
    {
        return $this->truncateAt === null ? \_CKFinder_Vendor_Prefix\GuzzleHttp\Psr7\Message::bodySummary($message) : \_CKFinder_Vendor_Prefix\GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
