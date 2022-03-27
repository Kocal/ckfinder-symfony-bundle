<?php

namespace _CKFinder_Vendor_Prefix\Aws\Api\Parser;

use _CKFinder_Vendor_Prefix\Aws\Api\Service;
use _CKFinder_Vendor_Prefix\Aws\Api\StructureShape;
use _CKFinder_Vendor_Prefix\Aws\CommandInterface;
use _CKFinder_Vendor_Prefix\Aws\ResultInterface;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\ResponseInterface;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\StreamInterface;
/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \Aws\Api\Service Representation of the service API*/
    protected $api;
    /** @var callable */
    protected $parser;
    /**
     * @param Service $api Service description.
     */
    public function __construct(Service $api)
    {
        $this->api = $api;
    }
    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    public abstract function __invoke(CommandInterface $command, ResponseInterface $response);
    public abstract function parseMemberFromStream(StreamInterface $stream, StructureShape $member, $response);
}
