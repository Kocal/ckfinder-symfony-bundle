<?php

namespace _CKFinder_Vendor_Prefix\League\Flysystem\Adapter;

use _CKFinder_Vendor_Prefix\League\Flysystem\Adapter\Polyfill\StreamedCopyTrait;
use _CKFinder_Vendor_Prefix\League\Flysystem\Adapter\Polyfill\StreamedTrait;
use _CKFinder_Vendor_Prefix\League\Flysystem\Config;
class NullAdapter extends AbstractAdapter
{
    use StreamedTrait;
    use StreamedCopyTrait;
    /**
     * Check whether a file is present.
     *
     * @param string $path
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function has($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function write($path, $contents, Config $config)
    {
        $type = 'file';
        $result = \compact('contents', 'type', 'path');
        if ($visibility = $config->get('visibility')) {
            $result['visibility'] = $visibility;
        }
        return $result;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function update($path, $contents, Config $config)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function read($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function rename($path, $newpath)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function delete($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function listContents($directory = '', $recursive = \false)
    {
        return [];
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function getMetadata($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function getSize($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function getMimetype($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function getTimestamp($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function getVisibility($path)
    {
        return \false;
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function setVisibility($path, $visibility)
    {
        return \compact('visibility');
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function createDir($dirname, Config $config)
    {
        return ['path' => $dirname, 'type' => 'dir'];
    }
    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function deleteDir($dirname)
    {
        return \false;
    }
}
