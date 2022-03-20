<?php

namespace CKSource\Bundle\CKFinderBundle\Factory;

use CKSource\Bundle\CKFinderBundle\Authentication\AuthenticationInterface;
use CKSource\Bundle\CKFinderBundle\Polyfill\CommandResolver;
use CKSource\CKFinder\CKFinder;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\Kernel;

class ConnectorFactory
{
    protected ?CKFinder $connectorInstance = null;

    public function __construct(
        protected $connectorConfig,
        protected $authenticationService
    )
    {}

    public function getConnector(): CKFinder
    {
        if ($this->connectorInstance) {
            return $this->connectorInstance;
        }

        $connector = new $this->connectorConfig['connectorClass']($this->connectorConfig);

        $connector['authentication'] = $this->authenticationService;

        if (Kernel::MAJOR_VERSION === 4) {
            $this->setupForV4Kernel($connector);
        }

        $this->connectorInstance = $connector;

        return $connector;
    }

    /**
     * Prepares the internal CKFinder's DI container to use the version 4+ of HttpKernel.
     */
    protected function setupForV4Kernel($ckfinder): void
    {
        $ckfinder['resolver'] = function () use ($ckfinder): CommandResolver {
            $commandResolver = new CommandResolver($ckfinder);
            $commandResolver->setCommandsNamespace(CKFinder::COMMANDS_NAMESPACE);
            $commandResolver->setPluginsNamespace(CKFinder::PLUGINS_NAMESPACE);

            return $commandResolver;
        };

        $ckfinder['kernel'] = fn(): HttpKernel => new HttpKernel(
            $ckfinder['dispatcher'],
            $ckfinder['resolver'],
            $ckfinder['request_stack'],
            $ckfinder['resolver']
        );
    }
}
