<?php

declare (strict_types=1);
namespace _CKFinder_Vendor_Prefix\League\MimeTypeDetection;

class EmptyExtensionToMimeTypeMap implements ExtensionToMimeTypeMap
{
    public function lookupMimeType(string $extension) : ?string
    {
        return null;
    }
}
