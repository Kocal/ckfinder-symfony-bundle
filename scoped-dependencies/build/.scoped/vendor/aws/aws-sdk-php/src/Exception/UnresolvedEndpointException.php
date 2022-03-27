<?php

namespace _CKFinder_Vendor_Prefix\Aws\Exception;

use _CKFinder_Vendor_Prefix\Aws\HasMonitoringEventsTrait;
use _CKFinder_Vendor_Prefix\Aws\MonitoringEventsInterface;
class UnresolvedEndpointException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}