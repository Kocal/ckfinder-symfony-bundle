<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

class ForceThrowExceptions implements PatcherInterface
{
    use PatcherTrait;

    public function patch(string $connectorPath): void
    {
        $this->patchFile(
            $connectorPath . '/CKFinder.php',
            "\$this['debug'] = \$app['config']->get('debug');",
            "\$this['debug'] = \$app['config']->get('debug');\n        \$this['forceThrowExceptions'] = \$app['config']->get('forceThrowExceptions');",
        );
        $this->patchFile(
            $connectorPath . '/CKFinder.php',
            "return new ExceptionHandler(\$app['translator'], \$app['debug'], \$app['logger']);",
            "return new ExceptionHandler(\$app['translator'], \$app['debug'], \$app['forceThrowExceptions'], \$app['logger']);",
        );

        $this->patchFile(
            $connectorPath . '/ExceptionHandler.php',
            "public function __construct(Translator \$translator, \$debug = false, LoggerInterface \$logger = null)",
            "public function __construct(Translator \$translator, \$debug = false, \$forceThrowExceptions = false, LoggerInterface \$logger = null)",
        );
        $this->patchFile(
            $connectorPath . '/ExceptionHandler.php',
            "\$this->debug = \$debug;",
            "\$this->debug = \$debug;\n        \$this->forceThrowExceptions = \$forceThrowExceptions;",
        );
        $this->patchFile(
            $connectorPath . '/ExceptionHandler.php',
            "if (filter_var(\ini_get('display_errors'), FILTER_VALIDATE_BOOLEAN)) {",
            "if (\$this->forceThrowExceptions || filter_var(\ini_get('display_errors'), FILTER_VALIDATE_BOOLEAN)) {",
        );
    }
}
