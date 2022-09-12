<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#polyfills
$polyfillsBootstraps = array_map(
    static fn (SplFileInfo $fileInfo) => $fileInfo->getPathname(),
    iterator_to_array(
        Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/symfony/polyfill-*')
            ->name('bootstrap*.php'),
        false,
    ),
);

$notScopedDependencies = array_map(
    static fn (SplFileInfo $fileInfo) => $fileInfo->getPathname(),
    iterator_to_array(
        Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/{aws}')
            #->in(__DIR__ . '/../vendor/{aws,guzzlehttp,mtdowling}')
            ->name('*.php'),
        false,
    ),
);

// You can do your own things here, e.g. collecting symbols to expose dynamically
// or files to exclude.
// However beware that this file is executed by PHP-Scoper, hence if you are using
// the PHAR it will be loaded by the PHAR. So it is highly recommended to avoid
// to auto-load any code here: it can result in a conflict or even corrupt
// the PHP-Scoper analysis.

return [
    // The prefix configuration. If a non null value is be used, a random prefix
    // will be generated instead.
    //
    // For more see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#prefix
    'prefix' => '_CKFinder_Vendor_Prefix',

    // By default when running php-scoper add-prefix, it will prefix all relevant code found in the current working
    // directory. You can however define which files should be scoped by defining a collection of Finders in the
    // following configuration key.
    //
    // This configuration entry is completely ignored when using Box.
    //
    // For more see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#finders-and-paths
    'finders' => [
        Finder::create()
            ->files()
            ->ignoreVCS(true)
            ->notName('/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/')
            ->exclude([
                'doc',
                'docs',
                'test',
                'test_old',
                'tests',
                'Tests',
                'vendor-bin',
            ])
            ->in('../vendor'),
        Finder::create()->append([
            '../composer.json',
            '../composer.lock',
        ]),
    ],

    // List of excluded files, i.e. files for which the content will be left untouched.
    // Paths are relative to the configuration file unless if they are already absolute
    //
    // For more see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#patchers
    'exclude-files' => [
        ...$polyfillsBootstraps,
        ...$notScopedDependencies,
    ],

    // When scoping PHP files, there will be scenarios where some of the code being scoped indirectly references the
    // original namespace. These will include, for example, strings or string manipulations. PHP-Scoper has limited
    // support for prefixing such strings. To circumvent that, you can define patchers to manipulate the file to your
    // heart contents.
    //
    // For more see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#patchers
    'patchers' => [
        static function (string $filePath, string $prefix, string $contents): string {
            if (!str_ends_with($filePath, 'vendor/composer/autoload_real.php')) {
                return $contents;
            }

            $contents = str_replace(
                'if (\'Composer\\\\Autoload\\\\ClassLoader\' === $class) {',
                'if (\''.$prefix.'\\\\Composer\\\\Autoload\\\\ClassLoader\' === $class) {',
                $contents
            );

            // Prevent "Cannot declare class ComposerAutoloaderInit[...], because the name is already in use in [...]/scoped-dependencies/build/.scoped/vendor/composer/autoload_real.php on line 39"
            $contents = str_replace(
                '\class_alias(\'_CKFinder_Vendor_Prefix\\\\ComposerAutoloaderInit',
                '// \class_alias(\'_CKFinder_Vendor_Prefix\\\\ComposerAutoloaderInit',
                $contents
            );
            $contents = str_replace(
                '\spl_autoload_unregister(array(\'ComposerAutoloaderInit',
                '// \spl_autoload_unregister(array(\'ComposerAutoloaderInit',
                $contents
            );

            return $contents;
        },
        static function (string $filePath, string $prefix, string $contents): string {
            if (!str_ends_with($filePath, 'vendor/league/flysystem-aws-s3-v3/src/AwsS3Adapter.php')) {
                return $contents;
            }

            $contents = str_replace(
                '$prefix = \ltrim($prefix, \'/\');',
                '$prefix = \ltrim((string) $prefix, \'/\');',
                $contents
            );
            return $contents;
        },
        static function (string $filePath, string $prefix, string $contents): string {
            if (!str_ends_with($filePath, 'vendor/league/flysystem-cached-adapter/src/CachedAdapter.php')) {
                return $contents;
            }

            // Fix an issue with the CachedAdapter and PSR6 cache.
            $contents = str_replace(
                '$result[\'type\'] = \'file\';',
                '$result[\'type\'] = \'file\';'."\n".'            $result[\'timestamp\'] = time();',
                $contents
            );
            return $contents;
        },
    ],

    // List of symbols to consider internal i.e. to leave untouched.
    //
    // For more information see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#excluded-symbols
    'exclude-namespaces' => [
        'Symfony\Polyfill',
        //'~^(?!League\\\\)~',
        // 'Acme\Foo'                     // The Acme\Foo namespace (and sub-namespaces)
        // '~^PHPUnit\\\\Framework$~',    // The whole namespace PHPUnit\Framework (but not sub-namespaces)
        // '~^$~',                        // The root namespace only
        // '',                            // Any namespace
        '~^Aws\\\\~',
        #'~^GuzzleHttp\\\\~',
        #'~^JmesPath\\\\~',
    ],
    'exclude-classes' => [
        // 'ReflectionClassConstant',
    ],
    'exclude-functions' => [
        // 'mb_str_split',
    ],
    'exclude-constants' => [
        // Symfony global constants
        '/^SYMFONY\_[\p{L}_]+$/',
    ],

    // List of symbols to expose.
    //
    // For more information see: https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#exposed-symbols
    'expose-global-constants' => true,
    'expose-global-classes' => true,
    'expose-global-functions' => true,
    'expose-namespaces' => [
        // 'Acme\Foo'                     // The Acme\Foo namespace (and sub-namespaces)
        // '~^PHPUnit\\\\Framework$~',    // The whole namespace PHPUnit\Framework (but not sub-namespaces)
        // '~^$~',                        // The root namespace only
        // '',                            // Any namespace
    ],
    'expose-classes' => [],
    'expose-functions' => [],
    'expose-constants' => [],
];
