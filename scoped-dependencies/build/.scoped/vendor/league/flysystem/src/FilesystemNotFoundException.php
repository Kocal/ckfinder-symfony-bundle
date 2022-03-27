<?php

namespace _CKFinder_Vendor_Prefix\League\Flysystem;

use LogicException;
/**
 * Thrown when the MountManager cannot find a filesystem.
 */
class FilesystemNotFoundException extends LogicException implements FilesystemException
{
}
