<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Symfony54Patcher implements PatcherInterface
{
    use PatcherTrait;

    public function patch(string $connectorPath): void
    {
        $this->patchFile(
            $connectorPath.'/CKFinder.php',
            'public function handle(Request $request, int $type = HttpKernelInterface::MAIN_REQUEST, bool $catch = true)',
            'public function handle(Request $request, int $type = HttpKernelInterface::MAIN_REQUEST, bool $catch = true): Response',
        );

        $this->patchFile(
            $connectorPath.'/CommandResolver.php',
            'public function getController(Request $request)',
            'public function getController(Request $request): callable|false',
        );

        $this->patchFile(
            $connectorPath.'/ArgumentResolver.php',
            'public function getArguments(Request $request, callable $command)',
            'public function getArguments(Request $request, callable $command): array',
        );

        $this->patchFile(
            $connectorPath.'/Response/JsonResponse.php',
            'public function setData($data = [])',
            'public function setData(mixed $data = []): static',
        );
    }
}