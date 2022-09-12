<?php

declare(strict_types=1);

use CKSource\Bundle\CKFinderBundle\Rector\Rector\ReturnTypeWillChangeRector;
use Rector\Config\RectorConfig;
use Rector\Transform\ValueObject\ClassMethodReference;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/.scoped/vendor/',
    ]);

    $rectorConfig->autoloadPaths([
        __DIR__ . '/.scoped/vendor/autoload.php',
        __DIR__ . '/.scoped/vendor/scoper-autoload.php',
    ]);

    $rectorConfig->disableParallel();

    $rectorConfig->ruleWithConfiguration(
        ReturnTypeWillChangeRector::class,
        [
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'has'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'write'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'writeStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'readStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'updateStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'update'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'read'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'rename'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'copy'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'delete'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'listContents'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMetadata'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getSize'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMimetype'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getTimestamp'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'setVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'createDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'deleteDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'deleteDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\Adapter\Local', 'normalizeFileInfo'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\Adapter\Local', 'mapFileInfo'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'has'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'read'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'readStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMimetype'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getSize'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getTimestamp'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMetadata'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\Cached\CacheInterface', 'isComplete'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'read'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'write'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'writeStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'update'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'updateStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'rename'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'copy'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'delete'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'deleteDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'createDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\AdapterInterface', 'setVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'has'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'read'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'readStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'listContents'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMetadata'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getSize'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getMimetype'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getTimestamp'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\ReadInterface', 'getVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'has'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'write'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'writeStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'put'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'putStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'readAndDelete'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'update'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'updateStream'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'read'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'rename'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'copy'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'delete'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'deleteDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'createDir'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'listContents'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'getMimetype'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'getTimestamp'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'getVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'getSize'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'setVisibility'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'getMetadata'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\FilesystemInterface', 'get'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\Adapter\AbstractAdapter', 'applyPathPrefix'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\League\Flysystem\Adapter\AbstractAdapter', 'setPathPrefix'),
            new ClassMethodReference('_CKFinder_Vendor_Prefix\Psr\Cache\CacheItemInterface', 'get'),
        ]
    );
};
