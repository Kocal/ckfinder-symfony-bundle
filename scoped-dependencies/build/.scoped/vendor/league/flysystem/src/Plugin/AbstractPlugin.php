<?php

namespace _CKFinder_Vendor_Prefix\League\Flysystem\Plugin;

use _CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface;
use _CKFinder_Vendor_Prefix\League\Flysystem\PluginInterface;
abstract class AbstractPlugin implements PluginInterface
{
    /**
     * @var FilesystemInterface
     */
    protected $filesystem;
    /**
     * Set the Filesystem object.
     *
     * @param FilesystemInterface $filesystem
     */
    public function setFilesystem(FilesystemInterface $filesystem)
    {
        $this->filesystem = $filesystem;
    }
}
