<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Connector\Backend;

use _CKFinder_Vendor_Prefix\League\Flysystem\AwsS3v3\AwsS3Adapter;
use _CKFinder_Vendor_Prefix\League\Flysystem\Cached\CachedAdapter;
use Aws\S3\S3ClientInterface;
use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\Backend\BackendFactory;
use CKSource\CKFinder\CKFinder;
use PHPUnit\Framework\TestCase;

class BackendFactoryTest extends TestCase
{
    public function testS3Backend(): void
    {
        $ckfinder = new CKFinder([
            'backends' => [
                [
                    'name' => 'default',
                    'adapter' => 's3',
                    'key' => 'AWS_KEY',
                    'secret' => 'AWS_SECRET',
                    'region' => 'eu-west-3',
                    'bucket' => 'my-bucket',
                ],
            ],
        ]);
        $backendFactory = new BackendFactory($ckfinder);

        $backend = $backendFactory->getBackend('default');

        static::assertInstanceOf(Backend::class, $backend);
        static::assertInstanceOf(CachedAdapter::class, $cachedAdapter = $backend->getAdapter());
        static::assertInstanceOf(AwsS3Adapter::class, $awsS3Adapter = $cachedAdapter->getAdapter());
        static::assertInstanceOf(S3ClientInterface::class, $awsS3Adapter->getClient());
        static::assertSame('my-bucket', $awsS3Adapter->getBucket());
    }
}