<?php

namespace CKSource\Bundle\CKFinderBundle\Factory;

use CKSource\Bundle\CKFinderBundle\Authentication\AuthenticationInterface;
use CKSource\CKFinder\CKFinder;
use Psr\Container\ContainerInterface;

class ConnectorFactory
{
    protected ?CKFinder $connectorInstance = null;

    /**
     * @param array<string,mixed> $connectorConfig
     */
    public function __construct(
        protected array $connectorConfig,
        protected AuthenticationInterface $authenticationService,
        protected ContainerInterface $servicesMap,
    ) {
    }

    public function getConnector(): CKFinder
    {
        if (null !== $this->connectorInstance) {
            return $this->connectorInstance;
        }

        /** @var CKFinder $connector */
        $connector = new $this->connectorConfig['connectorClass']($this->connectorConfig);
        $connector['authentication'] = $this->authenticationService;
        $connector['services_map'] = fn(): \Psr\Container\ContainerInterface => $this->servicesMap;

        return $this->connectorInstance = $connector;
    }
}
