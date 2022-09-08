<?php
/*
 * This file is a part of the CKFinder bundle for Symfony.
 *
 * Copyright (C) 2016, CKSource - Frederico Knabben. All rights reserved.
 *
 * Licensed under the terms of the MIT license.
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace CKSource\Bundle\CKFinderBundle\Tests\DependencyInjection;

use _CKFinder_Vendor_Prefix\League\Flysystem\AwsS3v3\AwsS3Adapter;
use _CKFinder_Vendor_Prefix\League\Flysystem\Cached\CachedAdapter;
use _CKFinder_Vendor_Prefix\League\Flysystem\Cached\Storage\Psr6Cache;
use Aws\S3\S3Client;
use CKSource\Bundle\CKFinderBundle\Cache\Psr6\CacheItemPoolCompatibilityBridge;
use CKSource\Bundle\CKFinderBundle\DependencyInjection\CKSourceCKFinderExtension;
use CKSource\Bundle\CKFinderBundle\Tests\Stub\DummyCacheItemPool;
use CKSource\CKFinder\Backend\Adapter\Cache\Storage\Memory;
use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\Backend\BackendFactory;
use CKSource\CKFinder\CKFinder;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * CKSourceCKFinderExtension test.
 */
class CKSourceCKFinderExtensionTest extends TestCase
{
    protected ContainerBuilder $container;
    protected string  $extensionAlias;

    protected function setUp(): void
    {
        $ckfinderExtension = new CKSourceCKFinderExtension();

        $this->extensionAlias = $ckfinderExtension->getAlias();

        $this->container = new ContainerBuilder();

        $this->container->setParameter('templating.engines', ['php', 'twig']);
        $this->container->setParameter('templating.helper.form.resources', []);
        $this->container->setParameter('twig.form.resources', []);
        $this->container->setParameter('kernel.cache_dir', '/app/cache');
        $this->container->setParameter('kernel.logs_dir', '/app/logs');
        $this->container->setParameter('kernel.root_dir', '/app');
        $this->container->setParameter('kernel.project_dir', '');

        $this->container->registerExtension($ckfinderExtension);
        $this->container->loadFromExtension($ckfinderExtension->getAlias());
    }

    protected function tearDown(): void
    {
        unset($this->container);
    }

    /**
     * Returns config fixture.
     *
     * @return array<string,mixed> connector config array fixture
     */
    protected function getConfig(): array
    {
        return require __DIR__ . '/../Fixtures/config/ckfinder_config.php';
    }

    /**
     * Tests default values set in the container.
     */
    public function testDefaultValues(): void
    {
        $this->container->compile();
        static::assertSame(\CKSource\CKFinder\CKFinder::class, $this->container->getParameter('ckfinder.connector.class'));
        static::assertSame(\CKSource\Bundle\CKFinderBundle\Authentication\Authentication::class, $this->container->getParameter('ckfinder.connector.auth.class'));
        static::assertEquals($this->getConfig(), $this->container->getParameter('ckfinder.connector.config'));
    }

    /**
     * Tests default services.
     */
    public function testDefaultServices(): void
    {
        $this->container->compile();
        static::assertInstanceOf(\CKSource\CKFinder\CKFinder::class, $this->container->get('ckfinder.connector'));
        static::assertInstanceOf(\CKSource\Bundle\CKFinderBundle\Authentication\AuthenticationInterface::class, $this->container->get('ckfinder.connector.auth'));
    }

    /**
     * Tests overwriting backend options in the result config.
     */
    public function testOverwritingDefaultBackendsConfig(): void
    {
        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'backends' => [
                    'default' => [
                        'root' => '/foo/bar',
                        'baseUrl' => 'http://example.com/foo/bar',
                    ],
                ],
            ],
        ]);

        $this->container->compile();

        $config = $this->getConfig();
        static::assertIsArray($config);
        static::assertIsArray($config['backends']);
        static::assertIsArray($config['backends']['default']);
        $config['backends']['default']['root'] = '/foo/bar';
        $config['backends']['default']['baseUrl'] = 'http://example.com/foo/bar';

        static::assertEquals($config, $this->container->getParameter('ckfinder.connector.config'));
    }

    /**
     * Tests appending new backends in the result config.
     */
    public function testAppendingDefaultBackendsConfig(): void
    {
        $newBackendConfig = [
            'name' => 'my_ftp',
            'adapter' => 'ftp',
            'root' => '/foo/bar',
            'baseUrl' => 'http://example.com/foo/bar',
            'host' => 'localhost',
            'username' => 'user',
            'password' => 'pass',
        ];

        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'backends' => [
                    'my_ftp' => $newBackendConfig,
                ],
            ],
        ]);

        $this->container->compile();

        $config = $this->getConfig();

        $config['backends']['my_ftp'] = $newBackendConfig;

        static::assertEquals($config, $this->container->getParameter('ckfinder.connector.config'));
    }

    /**
     * Tests the custom authentication service.
     */
    public function testCustomAuthentication(): void
    {
        $authClass = \CKSource\Bundle\CKFinderBundle\Tests\Fixtures\Authentication\CustomAuthentication::class;

        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'authenticationClass' => $authClass,
            ],
        ]);

        $this->container->compile();

        /** @var \CKSource\Bundle\CKFinderBundle\Tests\Fixtures\Authentication\CustomAuthentication $auth */
        $auth = $this->container->get('ckfinder.connector.auth');
        static::assertInstanceOf(\CKSource\Bundle\CKFinderBundle\Authentication\AuthenticationInterface::class, $auth);
        static::assertInstanceOf($authClass, $auth);

        /** @var \CKSource\CKFinder\CKFinder $connector */
        $connector = $this->container->get('ckfinder.connector');
        $connectorAuth = $connector->offsetGet('authentication');
        static::assertSame($auth, $connectorAuth);

        static::assertFalse($connectorAuth->authenticate());
        $auth->setAuthenticated(true);
        static::assertTrue($connectorAuth->authenticate());
    }

    /**
     * Tests if the resourceType option is completely overwritten.
     */
    public function testIfResourceTypesAreNoDeeplyMerged(): void
    {
        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'resourceTypes' => [
                    'Custom' => [
                        'name' => 'Custom',
                        'backend' => 'default',
                    ],
                ],
            ],
        ]);

        $this->container->compile();

        $connectorConfig = $this->container->getParameter('ckfinder.connector.config');

        $expected = [
            'Custom' => [
                'name' => 'Custom',
                'backend' => 'default',
            ],
        ];

        static::assertIsArray($connectorConfig);
        static::assertArrayHasKey('resourceTypes', $connectorConfig);
        static::assertEquals($expected, $connectorConfig['resourceTypes']);

        $connector = $this->container->get('ckfinder.connector');

        static::assertEquals(['Custom'], $connector['config']->getResourceTypes());
    }

    /**
     * Tests if the default resource types are used if the resourceType option is not set.
     */
    public function testIfDefaultResourceTypesAreSet(): void
    {
        $this->container->compile();

        $connector = $this->container->get('ckfinder.connector');

        static::assertEquals(['Files', 'Images'], $connector['config']->getResourceTypes());
    }

    /**
     * Tests if a S3 Client reference can be defined in `client` option
     */
    public function testBackendS3Client(): void
    {
        $this->container->set('my_aws_s3_client', $s3Client = new S3Client([
            'region' => 'eu-west-3',
            'version' => 'latest',
        ]));

        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'backends' => [
                    [
                        'name' => 'default',
                        'adapter' => 's3',
                        'client' => 'my_aws_s3_client',
                        'bucket' => 'my-bucket',
                    ],
                ],
            ],
        ]);

        $this->container->compile();

        $connector = $this->container->get('ckfinder.connector');
        static::assertInstanceOf(CKFinder::class, $connector);

        $backendFactory = $connector->getBackendFactory();
        static::assertInstanceOf(BackendFactory::class, $backendFactory);

        $backend = $backendFactory->getBackend('default');
        static::assertInstanceOf(Backend::class, $backend);
        static::assertInstanceOf(CachedAdapter::class, $cachedAdapter = $backend->getAdapter());
        static::assertInstanceOf(Memory::class, $cachedAdapter->getCache());
        static::assertInstanceOf(AwsS3Adapter::class, $awsS3Adapter = $cachedAdapter->getAdapter());
        static::assertSame($s3Client, $awsS3Adapter->getClient());
    }

    public function testBackendWithPsr6Cache(): void
    {
        $this->container->set('my_aws_s3_client', new S3Client([
            'region' => 'eu-west-3',
            'version' => 'latest',
        ]));

        $this->container->set('my_cache_pool', $cacheItemPool = new DummyCacheItemPool());

        $this->container->loadFromExtension($this->extensionAlias, [
            'connector' => [
                'backends' => [
                    [
                        'name' => 'default',
                        'adapter' => 's3',
                        'client' => 'my_aws_s3_client',
                        'bucket' => 'my-bucket',
                        'cache' => [
                            'type' => 'psr6',
                            'args' => [
                                'pool' => 'my_cache_pool',
                                'key' => 'ckfinder',
                                'expire' => 60 * 60 * 24 * 30,
                            ],
                        ]
                    ],
                ],
            ],
        ]);

        $this->container->compile();

        $connector = $this->container->get('ckfinder.connector');
        static::assertInstanceOf(CKFinder::class, $connector);

        $backendFactory = $connector->getBackendFactory();
        static::assertInstanceOf(BackendFactory::class, $backendFactory);

        $backend = $backendFactory->getBackend('default');
        static::assertInstanceOf(Backend::class, $backend);
        static::assertInstanceOf(CachedAdapter::class, $cachedAdapter = $backend->getAdapter());

        static::assertInstanceOf(Psr6Cache::class, $cache = $cachedAdapter->getCache());
        $state = \Closure::bind(function () {
            return [
               'pool' => $this->pool,
               'key' => $this->key,
               'expire' => $this->expire,
           ];
        }, $cache, Psr6Cache::class)();
        static::assertInstanceOf(CacheItemPoolCompatibilityBridge::class, $state['pool']);
        static::assertSame($cacheItemPool, $state['pool']->getCacheItemPool());
        static::assertSame('ckfinder', $state['key']);
        static::assertSame(60 * 60 * 24 * 30, $state['expire']);
    }
}
