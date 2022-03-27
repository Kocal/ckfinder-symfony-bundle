<?php

namespace _CKFinder_Vendor_Prefix\Aws\DefaultsMode\Exception;

use _CKFinder_Vendor_Prefix\Aws\HasMonitoringEventsTrait;
use _CKFinder_Vendor_Prefix\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration mode
 */
class ConfigurationException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}