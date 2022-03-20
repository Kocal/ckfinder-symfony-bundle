<?php

namespace CKSource\Bundle\CKFinderBundle\Factory;

use CKSource\CKFinder\CKFinder;

class ConnectorFactory
{
    protected ?CKFinder $connectorInstance = null;

    public function __construct(
        protected $connectorConfig,
        protected $authenticationService
    ) {
    }

    public function getConnector(): CKFinder
    {
        if ($this->connectorInstance) {
            return $this->connectorInstance;
        }

        $connector = new $this->connectorConfig['connectorClass']($this->connectorConfig);
        $connector['authentication'] = $this->authenticationService;

        return $this->connectorInstance = $connector;
    }
}
