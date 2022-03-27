<?php

namespace _CKFinder_Vendor_Prefix;

// This file was auto-generated from sdk-root/src/data/backup-gateway/2021-01-01/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2021-01-01', 'endpointPrefix' => 'backup-gateway', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceFullName' => 'AWS Backup Gateway', 'serviceId' => 'Backup Gateway', 'signatureVersion' => 'v4', 'signingName' => 'backup-gateway', 'targetPrefix' => 'BackupOnPremises_v20210101', 'uid' => 'backup-gateway-2021-01-01'], 'operations' => ['AssociateGatewayToServer' => ['name' => 'AssociateGatewayToServer', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AssociateGatewayToServerInput'], 'output' => ['shape' => 'AssociateGatewayToServerOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException']]], 'CreateGateway' => ['name' => 'CreateGateway', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateGatewayInput'], 'output' => ['shape' => 'CreateGatewayOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException']]], 'DeleteGateway' => ['name' => 'DeleteGateway', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteGatewayInput'], 'output' => ['shape' => 'DeleteGatewayOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true], 'DeleteHypervisor' => ['name' => 'DeleteHypervisor', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteHypervisorInput'], 'output' => ['shape' => 'DeleteHypervisorOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ResourceNotFoundException']], 'idempotent' => \true], 'DisassociateGatewayFromServer' => ['name' => 'DisassociateGatewayFromServer', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DisassociateGatewayFromServerInput'], 'output' => ['shape' => 'DisassociateGatewayFromServerOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'ImportHypervisorConfiguration' => ['name' => 'ImportHypervisorConfiguration', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ImportHypervisorConfigurationInput'], 'output' => ['shape' => 'ImportHypervisorConfigurationOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'AccessDeniedException']]], 'ListGateways' => ['name' => 'ListGateways', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListGatewaysInput'], 'output' => ['shape' => 'ListGatewaysOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException']]], 'ListHypervisors' => ['name' => 'ListHypervisors', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListHypervisorsInput'], 'output' => ['shape' => 'ListHypervisorsOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsForResourceInput'], 'output' => ['shape' => 'ListTagsForResourceOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'ListVirtualMachines' => ['name' => 'ListVirtualMachines', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListVirtualMachinesInput'], 'output' => ['shape' => 'ListVirtualMachinesOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException']]], 'PutMaintenanceStartTime' => ['name' => 'PutMaintenanceStartTime', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'PutMaintenanceStartTimeInput'], 'output' => ['shape' => 'PutMaintenanceStartTimeOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TagResourceInput'], 'output' => ['shape' => 'TagResourceOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'TestHypervisorConfiguration' => ['name' => 'TestHypervisorConfiguration', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TestHypervisorConfigurationInput'], 'output' => ['shape' => 'TestHypervisorConfigurationOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UntagResourceInput'], 'output' => ['shape' => 'UntagResourceOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'UpdateGatewayInformation' => ['name' => 'UpdateGatewayInformation', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateGatewayInformationInput'], 'output' => ['shape' => 'UpdateGatewayInformationOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException']]], 'UpdateHypervisor' => ['name' => 'UpdateHypervisor', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateHypervisorInput'], 'output' => ['shape' => 'UpdateHypervisorOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InternalServerException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ResourceNotFoundException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'required' => ['ErrorCode'], 'members' => ['ErrorCode' => ['shape' => 'string'], 'Message' => ['shape' => 'string']], 'exception' => \true], 'ActivationKey' => ['type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '^[0-9a-zA-Z\\-]+$'], 'AssociateGatewayToServerInput' => ['type' => 'structure', 'required' => ['GatewayArn', 'ServerArn'], 'members' => ['GatewayArn' => ['shape' => 'GatewayArn'], 'ServerArn' => ['shape' => 'ServerArn']]], 'AssociateGatewayToServerOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'ConflictException' => ['type' => 'structure', 'required' => ['ErrorCode'], 'members' => ['ErrorCode' => ['shape' => 'string'], 'Message' => ['shape' => 'string']], 'exception' => \true], 'CreateGatewayInput' => ['type' => 'structure', 'required' => ['ActivationKey', 'GatewayDisplayName', 'GatewayType'], 'members' => ['ActivationKey' => ['shape' => 'ActivationKey'], 'GatewayDisplayName' => ['shape' => 'Name'], 'GatewayType' => ['shape' => 'GatewayType'], 'Tags' => ['shape' => 'Tags']]], 'CreateGatewayOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'DayOfMonth' => ['type' => 'integer', 'box' => \true, 'max' => 31, 'min' => 1], 'DayOfWeek' => ['type' => 'integer', 'box' => \true, 'max' => 6, 'min' => 0], 'DeleteGatewayInput' => ['type' => 'structure', 'required' => ['GatewayArn'], 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'DeleteGatewayOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'DeleteHypervisorInput' => ['type' => 'structure', 'required' => ['HypervisorArn'], 'members' => ['HypervisorArn' => ['shape' => 'ServerArn']]], 'DeleteHypervisorOutput' => ['type' => 'structure', 'members' => ['HypervisorArn' => ['shape' => 'ServerArn']]], 'DisassociateGatewayFromServerInput' => ['type' => 'structure', 'required' => ['GatewayArn'], 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'DisassociateGatewayFromServerOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'Gateway' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn'], 'GatewayDisplayName' => ['shape' => 'Name'], 'GatewayType' => ['shape' => 'GatewayType'], 'HypervisorId' => ['shape' => 'HypervisorId'], 'LastSeenTime' => ['shape' => 'Time']]], 'GatewayArn' => ['type' => 'string', 'max' => 500, 'min' => 50, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov):backup-gateway(:[a-zA-Z-0-9]+){3}\\/[a-zA-Z-0-9]+$'], 'GatewayType' => ['type' => 'string', 'enum' => ['BACKUP_VM']], 'Gateways' => ['type' => 'list', 'member' => ['shape' => 'Gateway']], 'Host' => ['type' => 'string', 'max' => 128, 'min' => 3, 'pattern' => '^.+$'], 'HourOfDay' => ['type' => 'integer', 'box' => \true, 'max' => 23, 'min' => 0], 'Hypervisor' => ['type' => 'structure', 'members' => ['Host' => ['shape' => 'Host'], 'HypervisorArn' => ['shape' => 'ServerArn'], 'KmsKeyArn' => ['shape' => 'KmsKeyArn'], 'Name' => ['shape' => 'Name'], 'State' => ['shape' => 'HypervisorState']]], 'HypervisorId' => ['type' => 'string', 'max' => 100, 'min' => 1], 'HypervisorState' => ['type' => 'string', 'enum' => ['PENDING', 'ONLINE', 'OFFLINE', 'ERROR']], 'Hypervisors' => ['type' => 'list', 'member' => ['shape' => 'Hypervisor']], 'ImportHypervisorConfigurationInput' => ['type' => 'structure', 'required' => ['Host', 'Name'], 'members' => ['Host' => ['shape' => 'Host'], 'KmsKeyArn' => ['shape' => 'KmsKeyArn'], 'Name' => ['shape' => 'Name'], 'Password' => ['shape' => 'Password'], 'Tags' => ['shape' => 'Tags'], 'Username' => ['shape' => 'Username']]], 'ImportHypervisorConfigurationOutput' => ['type' => 'structure', 'members' => ['HypervisorArn' => ['shape' => 'ServerArn']]], 'InternalServerException' => ['type' => 'structure', 'members' => ['ErrorCode' => ['shape' => 'string'], 'Message' => ['shape' => 'string']], 'exception' => \true, 'fault' => \true], 'KmsKeyArn' => ['type' => 'string', 'max' => 500, 'min' => 50, 'pattern' => '^(^arn:(aws|aws-cn|aws-us-gov):kms:([a-zA-Z0-9-]+):([0-9]+):(key|alias)/(\\S+)$)|(^alias/(\\S+)$)$'], 'ListGatewaysInput' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'ListGatewaysOutput' => ['type' => 'structure', 'members' => ['Gateways' => ['shape' => 'Gateways'], 'NextToken' => ['shape' => 'NextToken']]], 'ListHypervisorsInput' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'ListHypervisorsOutput' => ['type' => 'structure', 'members' => ['Hypervisors' => ['shape' => 'Hypervisors'], 'NextToken' => ['shape' => 'NextToken']]], 'ListTagsForResourceInput' => ['type' => 'structure', 'required' => ['ResourceArn'], 'members' => ['ResourceArn' => ['shape' => 'ResourceArn']]], 'ListTagsForResourceOutput' => ['type' => 'structure', 'members' => ['ResourceArn' => ['shape' => 'ResourceArn'], 'Tags' => ['shape' => 'Tags']]], 'ListVirtualMachinesInput' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'ListVirtualMachinesOutput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'NextToken'], 'VirtualMachines' => ['shape' => 'VirtualMachines']]], 'MaxResults' => ['type' => 'integer', 'box' => \true, 'min' => 1], 'MinuteOfHour' => ['type' => 'integer', 'box' => \true, 'max' => 59, 'min' => 0], 'Name' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]*$'], 'NextToken' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^.+$'], 'Password' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[ -~]+$', 'sensitive' => \true], 'Path' => ['type' => 'string', 'max' => 4096, 'min' => 1, 'pattern' => '^[^\\x00]+$'], 'PutMaintenanceStartTimeInput' => ['type' => 'structure', 'required' => ['GatewayArn', 'HourOfDay', 'MinuteOfHour'], 'members' => ['DayOfMonth' => ['shape' => 'DayOfMonth'], 'DayOfWeek' => ['shape' => 'DayOfWeek'], 'GatewayArn' => ['shape' => 'GatewayArn'], 'HourOfDay' => ['shape' => 'HourOfDay'], 'MinuteOfHour' => ['shape' => 'MinuteOfHour']]], 'PutMaintenanceStartTimeOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'ResourceArn' => ['type' => 'string', 'max' => 500, 'min' => 50, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov):backup-gateway(:[a-zA-Z-0-9]+){3}\\/[a-zA-Z-0-9]+$'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['ErrorCode' => ['shape' => 'string'], 'Message' => ['shape' => 'string']], 'exception' => \true], 'ServerArn' => ['type' => 'string', 'max' => 500, 'min' => 50, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov):backup-gateway(:[a-zA-Z-0-9]+){3}\\/[a-zA-Z-0-9]+$'], 'Tag' => ['type' => 'structure', 'required' => ['Key', 'Value'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$'], 'TagKeys' => ['type' => 'list', 'member' => ['shape' => 'TagKey']], 'TagResourceInput' => ['type' => 'structure', 'required' => ['ResourceARN', 'Tags'], 'members' => ['ResourceARN' => ['shape' => 'ResourceArn'], 'Tags' => ['shape' => 'Tags']]], 'TagResourceOutput' => ['type' => 'structure', 'members' => ['ResourceARN' => ['shape' => 'ResourceArn']]], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^[^\\x00]*$'], 'Tags' => ['type' => 'list', 'member' => ['shape' => 'Tag']], 'TestHypervisorConfigurationInput' => ['type' => 'structure', 'required' => ['GatewayArn', 'Host'], 'members' => ['GatewayArn' => ['shape' => 'GatewayArn'], 'Host' => ['shape' => 'Host'], 'Password' => ['shape' => 'Password'], 'Username' => ['shape' => 'Username']]], 'TestHypervisorConfigurationOutput' => ['type' => 'structure', 'members' => []], 'Time' => ['type' => 'timestamp'], 'UntagResourceInput' => ['type' => 'structure', 'required' => ['ResourceARN', 'TagKeys'], 'members' => ['ResourceARN' => ['shape' => 'ResourceArn'], 'TagKeys' => ['shape' => 'TagKeys']]], 'UntagResourceOutput' => ['type' => 'structure', 'members' => ['ResourceARN' => ['shape' => 'ResourceArn']]], 'UpdateGatewayInformationInput' => ['type' => 'structure', 'required' => ['GatewayArn'], 'members' => ['GatewayArn' => ['shape' => 'GatewayArn'], 'GatewayDisplayName' => ['shape' => 'Name']]], 'UpdateGatewayInformationOutput' => ['type' => 'structure', 'members' => ['GatewayArn' => ['shape' => 'GatewayArn']]], 'UpdateHypervisorInput' => ['type' => 'structure', 'required' => ['HypervisorArn'], 'members' => ['Host' => ['shape' => 'Host'], 'HypervisorArn' => ['shape' => 'ServerArn'], 'Password' => ['shape' => 'Password'], 'Username' => ['shape' => 'Username']]], 'UpdateHypervisorOutput' => ['type' => 'structure', 'members' => ['HypervisorArn' => ['shape' => 'ServerArn']]], 'Username' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[ -\\.0-\\[\\]-~]*[!-\\.0-\\[\\]-~][ -\\.0-\\[\\]-~]*$', 'sensitive' => \true], 'ValidationException' => ['type' => 'structure', 'members' => ['ErrorCode' => ['shape' => 'string'], 'Message' => ['shape' => 'string']], 'exception' => \true], 'VirtualMachine' => ['type' => 'structure', 'members' => ['HostName' => ['shape' => 'Name'], 'HypervisorId' => ['shape' => 'string'], 'LastBackupDate' => ['shape' => 'Time'], 'Name' => ['shape' => 'Name'], 'Path' => ['shape' => 'Path'], 'ResourceArn' => ['shape' => 'ResourceArn']]], 'VirtualMachines' => ['type' => 'list', 'member' => ['shape' => 'VirtualMachine']], 'string' => ['type' => 'string']]];
