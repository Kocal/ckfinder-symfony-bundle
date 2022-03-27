<?php

namespace _CKFinder_Vendor_Prefix\Aws\Api\Parser;

use _CKFinder_Vendor_Prefix\Aws\Api\StructureShape;
use _CKFinder_Vendor_Prefix\Aws\CommandInterface;
use _CKFinder_Vendor_Prefix\Aws\Exception\AwsException;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\ResponseInterface;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\StreamInterface;
use _CKFinder_Vendor_Prefix\GuzzleHttp\Psr7;
/**
 * @internal Decorates a parser and validates the x-amz-crc32 header.
 */
class Crc32ValidatingParser extends AbstractParser
{
    /**
     * @param callable $parser Parser to wrap.
     */
    public function __construct(callable $parser)
    {
        $this->parser = $parser;
    }
    public function __invoke(CommandInterface $command, ResponseInterface $response)
    {
        if ($expected = $response->getHeaderLine('x-amz-crc32')) {
            $hash = \hexdec(Psr7\Utils::hash($response->getBody(), 'crc32b'));
            if ($expected != $hash) {
                throw new AwsException("crc32 mismatch. Expected {$expected}, found {$hash}.", $command, ['code' => 'ClientChecksumMismatch', 'connection_error' => \true, 'response' => $response]);
            }
        }
        $fn = $this->parser;
        return $fn($command, $response);
    }
    public function parseMemberFromStream(StreamInterface $stream, StructureShape $member, $response)
    {
        return $this->parser->parseMemberFromStream($stream, $member, $response);
    }
}
