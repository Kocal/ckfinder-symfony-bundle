<?php

namespace CKSource\Bundle\CKFinderBundle\Tests\Connector\Backend;

use Aws\S3\S3Client;
use Aws\S3\S3ClientInterface;
use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\Backend\BackendFactory;
use CKSource\CKFinder\CKFinder;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
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
                    'root' => '',
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
        static::assertInstanceOf(AwsS3V3Adapter::class, $awsS3Adapter = $backend->getBaseAdapter());
        static::assertInstanceOf(S3ClientInterface::class, \Closure::bind(fn (AwsS3V3Adapter $adapter): \Aws\S3\S3ClientInterface => $adapter->client, null, AwsS3V3Adapter::class)($awsS3Adapter));
        static::assertSame('my-bucket', \Closure::bind(fn (AwsS3V3Adapter $adapter): string => $adapter->bucket, null, AwsS3V3Adapter::class)($awsS3Adapter));
    }

    public function testS3BackendWithOwnClient(): void
    {
        $ckfinder = new CKFinder([
            'backends' => [
                [
                    'name' => 'default',
                    'adapter' => 's3',
                    'root' => '',
                    'client' => $s3Client = new S3Client([
                        'region' => 'eu-west-3',
                        'version' => 'latest',
                    ]),
                    'bucket' => 'my-bucket',
                ],
            ],
        ]);
        $backendFactory = new BackendFactory($ckfinder);

        $backend = $backendFactory->getBackend('default');

        static::assertInstanceOf(Backend::class, $backend);
        static::assertInstanceOf(AwsS3V3Adapter::class, $awsS3Adapter = $backend->getBaseAdapter());
        static::assertInstanceOf(S3ClientInterface::class, \Closure::bind(fn (AwsS3V3Adapter $adapter): \Aws\S3\S3ClientInterface => $adapter->client, null, AwsS3V3Adapter::class)($awsS3Adapter));
        static::assertSame('my-bucket', \Closure::bind(fn (AwsS3V3Adapter $adapter): string => $adapter->bucket, null, AwsS3V3Adapter::class)($awsS3Adapter));
    }
}
