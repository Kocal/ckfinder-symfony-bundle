<?php

namespace CKSource\Bundle\CKFinderBundle\Patcher;

class BackendAwsS3ClientPatcher implements PatcherInterface
{
    use PatcherTrait;

    public function patch(string $connectorPath): void
    {
        $this->patchFile(
            $connectorPath.'/Backend/BackendFactory.php',
            <<<'PHP'
            $clientConfig = [
                'credentials' => [
                    'key' => $backendConfig['key'],
                    'secret' => $backendConfig['secret'],
                ],
                'signature_version' => isset($backendConfig['signature']) ? $backendConfig['signature'] : 'v4',
                'version' => isset($backendConfig['version']) ? $backendConfig['version'] : 'latest',
            ];

            if (isset($backendConfig['region'])) {
                $clientConfig['region'] = $backendConfig['region'];
            }

            $client = new S3Client($clientConfig);
PHP,
            <<<'PHP'
            $client = ($backendConfig['client'] ?? null);
            if ($client instanceof S3Client) {
                $client = $backendConfig['client'];
                unset($backendConfig['client']);
            } elseif (is_string($client)) {
                $client = $this->app['services_map']->get($client);
                unset($backendConfig['client']);
            } else {
                $clientConfig = [
                    'credentials' => [
                        'key' => $backendConfig['key'],
                        'secret' => $backendConfig['secret'],
                    ],
                    'signature_version' => isset($backendConfig['signature']) ? $backendConfig['signature'] : 'v4',
                    'version' => isset($backendConfig['version']) ? $backendConfig['version'] : 'latest',
                ];
    
                if (isset($backendConfig['region'])) {
                    $clientConfig['region'] = $backendConfig['region'];
                }
    
                $client = new S3Client($clientConfig);
            }
PHP
        );
    }
}
