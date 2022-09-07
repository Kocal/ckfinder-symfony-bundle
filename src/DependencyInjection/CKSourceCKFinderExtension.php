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

namespace CKSource\Bundle\CKFinderBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}.
 */
class CKSourceCKFinderExtension extends Extension implements PrependExtensionInterface
{
    public function prepend(ContainerBuilder $container): void
    {
        $fileLocator = new FileLocator(__DIR__ . '/../Resources/config');

        $loader = new Loader\PhpFileLoader($container, $fileLocator);
        $loader->load('ckfinder_config.php');

        if ($container->hasExtension('twig')) {
            $container->prependExtensionConfig('twig', [
                'form_themes' => ['@CKSourceCKFinder/Form/fields.html.twig'],
            ]);
        }
    }

    /**
     * @param array<mixed> $configs
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $fileLocator = new FileLocator(__DIR__ . '/../Resources/config');

        $loader = new Loader\YamlFileLoader($container, $fileLocator);
        $loader->load('services.yaml');
        $loader->load('form.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('ckfinder.connector.factory.class', $config['connector']['connectorFactoryClass']);
        $container->setParameter('ckfinder.connector.class', $config['connector']['connectorClass']);
        $container->setParameter('ckfinder.connector.auth.class', $config['connector']['authenticationClass']);
        $container->setParameter('ckfinder.connector.config', $config['connector']);

        $this->registerServicesMap($config, $container);
    }

    public function getAlias(): string
    {
        return 'ckfinder';
    }

    private function registerServicesMap(array $config, ContainerBuilder $container): void
    {
        $servicesMap = [];

        foreach ($config['connector']['backends'] as $backend) {
            if ($backend['adapter'] === 's3' && is_string($clientId = $backend['client'] ?? null)) {
                $servicesMap[$clientId] ??= new Reference($clientId);
            }

            if (is_array($cache = ($backend['cache'] ?? null))) {
                if (null === ($cacheType = $cache['type'] ?? null)) {
                    throw new \InvalidArgumentException(sprintf('The "type" option must be set for the "%s" backend cache.', $backend['name']));
                }
                switch ($cacheType) {
                    case 'psr6':
                        if (is_string($poolId = $cache['args']['pool'] ?? null)) {
                            $servicesMap[$poolId] ??= new Reference($poolId);
                        }
                        break;
                    default:
                        throw new \InvalidArgumentException(sprintf('Unsupported cache type "%s" for backend "%s".', $cacheType, $backend['name']));
                }
            }
        }

        $servicesMapReference = ServiceLocatorTagPass::register($container, $servicesMap);

        $container->getDefinition('ckfinder.connector.factory')->replaceArgument(2, $servicesMapReference);
    }
}
