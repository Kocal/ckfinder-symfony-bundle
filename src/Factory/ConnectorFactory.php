<?php

namespace CKSource\Bundle\CKFinderBundle\Factory;

use CKSource\Bundle\CKFinderBundle\Authentication\AuthenticationInterface;
use CKSource\CKFinder\CKFinder;

class ConnectorFactory
{
    protected ?CKFinder $connectorInstance = null;

    /**
     * @param array<string,mixed> $connectorConfig
     */
    public function __construct(
        protected array $connectorConfig,
        protected AuthenticationInterface $authenticationService
    ) {
    }

    public function getConnector(): CKFinder
    {
        if ($this->connectorInstance) {
            return $this->connectorInstance;
        }

        /** @var CKFinder $connector */
        $connector = new $this->connectorConfig['connectorClass']($this->connectorConfig);
        $connector['authentication'] = $this->authenticationService;

        return $this->connectorInstance = $connector;
    }
}
