<?php

namespace _CKFinder_Vendor_Prefix\Aws\S3\UseArnRegion\Exception;

use _CKFinder_Vendor_Prefix\Aws\HasMonitoringEventsTrait;
use _CKFinder_Vendor_Prefix\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration for S3's UseArnRegion
 */
class ConfigurationException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
