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
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
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
        $fileLocator = new FileLocator(__DIR__.'/../Resources/config');

        $loader = new Loader\PhpFileLoader($container, $fileLocator);
        $loader->load('ckfinder_config.php');

        if ($container->hasExtension('twig')) {
            $container->prependExtensionConfig('twig', [
                'form_themes' => ['@CKSourceCKFinder/Form/fields.html.twig'],
            ]);
        }
    }

    public function load(array $configs, ContainerBuilder $container): void
    {
        $fileLocator = new FileLocator(__DIR__.'/../Resources/config');

        $loader = new Loader\YamlFileLoader($container, $fileLocator);
        $loader->load('services.yaml');
        $loader->load('form.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('ckfinder.connector.factory.class', $config['connector']['connectorFactoryClass']);
        $container->setParameter('ckfinder.connector.class', $config['connector']['connectorClass']);
        $container->setParameter('ckfinder.connector.auth.class', $config['connector']['authenticationClass']);
        $container->setParameter('ckfinder.connector.config', $config['connector']);
    }

    public function getAlias(): string
    {
        return 'ckfinder';
    }
}
