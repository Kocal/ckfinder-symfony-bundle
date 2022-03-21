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

namespace CKSource\Bundle\CKFinderBundle\Command;

use CKSource\Bundle\CKFinderBundle\Patcher\PatcherInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Command that downloads the CKFinder package and puts assets to the Resources/public directory of the bundle.
 */
class CKFinderDownloadCommand extends Command
{
    public const LATEST_VERSION = '3.5.3';
    public const FALLBACK_VERSION = '3.5.1';

    public function __construct(private PatcherInterface $patcher)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('ckfinder:download')
             ->setDescription('Downloads the CKFinder distribution package and extracts it to CKSourceCKFinderBundle.');
    }

    /**
     * Creates URL to CKFinder distribution package.
     */
    protected function buildPackageUrl(): string
    {
        $packageVersion = self::LATEST_VERSION;

        return "http://download.cksource.com/CKFinder/CKFinder%20for%20PHP/$packageVersion/ckfinder_php_$packageVersion.zip";
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (false === $targetPublicPath = realpath(__DIR__.'/../Resources/public')) {
            throw new \RuntimeException('Unable to get public path.');
        }

        if (!is_writable($targetPublicPath)) {
            $output->writeln('<error>The CKSourceCKFinderBundle::Resources/public directory is not writable (used path: '.$targetPublicPath.').</error>');

            return 1;
        }

        if (false === $targetConnectorPath = realpath(__DIR__.'/../_connector')) {
            throw new \RuntimeException('Unable to get CKFinder connector path.');
        }

        if (!is_writable($targetConnectorPath)) {
            $output->writeln('<error>The CKSourceCKFinderBundle::_connector directory is not writable (used path: '.$targetConnectorPath.').</error>');

            return 1;
        }

        if (file_exists($targetPublicPath.'/ckfinder/ckfinder.js')) {
            /** @var QuestionHelper $questionHelper */
            $questionHelper = $this->getHelper('question');
            $questionText =
                'It looks like the CKFinder distribution package has already been installed. '.
                "This command will overwrite the existing files.\nDo you want to proceed? [y/N]: ";
            $question = new ConfirmationQuestion($questionText, false);

            if (!$questionHelper->ask($input, $output, $question)) {
                return 0;
            }
        }

        /** @var ProgressBar|null $progressBar */
        $progressBar = null;

        $maxBytes = 0;
        $ctx = stream_context_create([], [
            'notification' => function ($notificationCode, $severity, $message, $messageCode, $bytesTransferred, $bytesMax) use (&$maxBytes, $output, &$progressBar): void {
                switch ($notificationCode) {
                    case STREAM_NOTIFY_FILE_SIZE_IS:
                        $maxBytes = $bytesMax;
                        $progressBar = new ProgressBar($output, $bytesMax);
                        break;
                    case STREAM_NOTIFY_PROGRESS:
                        $progressBar?->setProgress($bytesTransferred);
                        break;
                }
            },
        ]);

        $output->writeln('<info>Downloading the CKFinder 3 distribution package.</info>');

        $zipContents = @file_get_contents($this->buildPackageUrl(), false, $ctx);

        if (false === $zipContents) {
            $output->writeln(
                '<error>Could not download the distribution package of CKFinder.</error>'
            );

            return 1;
        }

        $progressBar?->finish();

        $output->writeln("\n".'Extracting CKFinder to the CKSourceCKFinderBundle::Resources/public directory.');

        if (false === $tempZipFile = tempnam(sys_get_temp_dir(), 'tmp')) {
            throw new \RuntimeException('Unable to create temporary file.');
        }
        file_put_contents($tempZipFile, $zipContents);
        $zip = new \ZipArchive();
        $zip->open($tempZipFile);

        $zipEntries = [];

        // These files won't be overwritten if already exists
        $filesToKeep = [
            'ckfinder/config.js',
            'ckfinder/ckfinder.html',
        ];

        for ($i = 0; $i < $zip->numFiles; ++$i) {
            if (false === $entry = $zip->getNameIndex($i)) {
                throw new \RuntimeException(sprintf('Unable to get Zip entry name from index "%d".', $i));
            }

            if (in_array($entry, $filesToKeep) && file_exists($targetPublicPath.'/'.$entry)) {
                continue;
            }

            $zipEntries[] = $entry;
        }

        $zip->extractTo($targetPublicPath, $zipEntries);
        $zip->close();

        $fs = new Filesystem();

        $output->writeln('Moving the CKFinder connector to the CKSourceCKFinderBundle::_connector directory.');
        $fs->mirror(
            $targetPublicPath.'/ckfinder/core/connector/php/vendor/cksource/ckfinder/src/CKSource/CKFinder',
            $targetConnectorPath
        );

        $output->writeln('Cleaning up.');
        $fs->remove([
            $tempZipFile,
            $targetPublicPath.'/ckfinder/core',
            $targetPublicPath.'/ckfinder/userfiles',
            $targetPublicPath.'/ckfinder/config.php',
            $targetPublicPath.'/ckfinder/README.md',
            $targetConnectorPath.'/README.md',
        ]);

        $output->writeln('Running code patchers...');
        $this->patcher->patch($targetConnectorPath);

        $output->writeln('<info>Done. Happy coding!</info>');

        return 0;
    }
}
