<?php

namespace _CKFinder_Vendor_Prefix\Aws\Exception;

use _CKFinder_Vendor_Prefix\Aws\HasMonitoringEventsTrait;
use _CKFinder_Vendor_Prefix\Aws\MonitoringEventsInterface;
class InvalidRegionException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
