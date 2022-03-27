<?php

namespace _CKFinder_Vendor_Prefix\Aws\ClientSideMonitoring;

use _CKFinder_Vendor_Prefix\Aws\CommandInterface;
use _CKFinder_Vendor_Prefix\Aws\Exception\AwsException;
use _CKFinder_Vendor_Prefix\Aws\ResultInterface;
use _CKFinder_Vendor_Prefix\GuzzleHttp\Psr7\Request;
use _CKFinder_Vendor_Prefix\Psr\Http\Message\RequestInterface;
/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{
    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(RequestInterface $request);
    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);
    public function __invoke(CommandInterface $cmd, RequestInterface $request);
}
