<?php

namespace _CKFinder_Vendor_Prefix\League\Flysystem;

use SplFileInfo;
class UnreadableFileException extends Exception
{
    public static function forFileInfo(SplFileInfo $fileInfo)
    {
        return new static(\sprintf('Unreadable file encountered: %s', $fileInfo->getRealPath()));
    }
}
