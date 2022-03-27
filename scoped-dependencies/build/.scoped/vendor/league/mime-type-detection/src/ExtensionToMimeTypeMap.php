<?php

declare (strict_types=1);
namespace _CKFinder_Vendor_Prefix\League\MimeTypeDetection;

interface ExtensionToMimeTypeMap
{
    public function lookupMimeType(string $extension) : ?string;
}
