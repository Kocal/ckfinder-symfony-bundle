<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/playground/symfony-6.0/src',
        __DIR__ . '/playground/symfony-6.1/src',
        __DIR__ . '/playground/symfony-6.2/src',
    ]);

    $ecsConfig->skip([
        __DIR__ . '/src/_connector',
    ]);

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
        SetList::PHPUNIT,
    ]);
};
