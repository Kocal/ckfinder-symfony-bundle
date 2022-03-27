<?php

namespace _CKFinder_Vendor_Prefix;

// This file was auto-generated from sdk-root/src/data/timestream-write/2018-11-01/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-11-01', 'endpointPrefix' => 'ingest.timestream', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'Timestream Write', 'serviceFullName' => 'Amazon Timestream Write', 'serviceId' => 'Timestream Write', 'signatureVersion' => 'v4', 'signingName' => 'timestream', 'targetPrefix' => 'Timestream_20181101', 'uid' => 'timestream-write-2018-11-01'], 'operations' => ['CreateDatabase' => ['name' => 'CreateDatabase', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateDatabaseRequest'], 'output' => ['shape' => 'CreateDatabaseResponse'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidEndpointException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'CreateTable' => ['name' => 'CreateTable', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateTableRequest'], 'output' => ['shape' => 'CreateTableResponse'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidEndpointException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'DeleteDatabase' => ['name' => 'DeleteDatabase', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteDatabaseRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'DeleteTable' => ['name' => 'DeleteTable', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteTableRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'DescribeDatabase' => ['name' => 'DescribeDatabase', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeDatabaseRequest'], 'output' => ['shape' => 'DescribeDatabaseResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'DescribeEndpoints' => ['name' => 'DescribeEndpoints', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeEndpointsRequest'], 'output' => ['shape' => 'DescribeEndpointsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ThrottlingException']], 'endpointoperation' => \true], 'DescribeTable' => ['name' => 'DescribeTable', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeTableRequest'], 'output' => ['shape' => 'DescribeTableResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'ListDatabases' => ['name' => 'ListDatabases', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListDatabasesRequest'], 'output' => ['shape' => 'ListDatabasesResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'ListTables' => ['name' => 'ListTables', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTablesRequest'], 'output' => ['shape' => 'ListTablesResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'UpdateDatabase' => ['name' => 'UpdateDatabase', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateDatabaseRequest'], 'output' => ['shape' => 'UpdateDatabaseResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'InternalServerException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'UpdateTable' => ['name' => 'UpdateTable', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateTableRequest'], 'output' => ['shape' => 'UpdateTableResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]], 'WriteRecords' => ['name' => 'WriteRecords', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'WriteRecordsRequest'], 'output' => ['shape' => 'WriteRecordsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ThrottlingException'], ['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'RejectedRecordsException'], ['shape' => 'InvalidEndpointException']], 'endpointdiscovery' => ['required' => \true]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'AmazonResourceName' => ['type' => 'string', 'max' => 1011, 'min' => 1], 'Boolean' => ['type' => 'boolean'], 'ConflictException' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'CreateDatabaseRequest' => ['type' => 'structure', 'required' => ['DatabaseName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceCreateAPIName'], 'KmsKeyId' => ['shape' => 'StringValue2048'], 'Tags' => ['shape' => 'TagList']]], 'CreateDatabaseResponse' => ['type' => 'structure', 'members' => ['Database' => ['shape' => 'Database']]], 'CreateTableRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'TableName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceCreateAPIName'], 'TableName' => ['shape' => 'ResourceCreateAPIName'], 'RetentionProperties' => ['shape' => 'RetentionProperties'], 'Tags' => ['shape' => 'TagList'], 'MagneticStoreWriteProperties' => ['shape' => 'MagneticStoreWriteProperties']]], 'CreateTableResponse' => ['type' => 'structure', 'members' => ['Table' => ['shape' => 'Table']]], 'Database' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'String'], 'DatabaseName' => ['shape' => 'ResourceName'], 'TableCount' => ['shape' => 'Long'], 'KmsKeyId' => ['shape' => 'StringValue2048'], 'CreationTime' => ['shape' => 'Date'], 'LastUpdatedTime' => ['shape' => 'Date']]], 'DatabaseList' => ['type' => 'list', 'member' => ['shape' => 'Database']], 'Date' => ['type' => 'timestamp'], 'DeleteDatabaseRequest' => ['type' => 'structure', 'required' => ['DatabaseName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName']]], 'DeleteTableRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'TableName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'TableName' => ['shape' => 'ResourceName']]], 'DescribeDatabaseRequest' => ['type' => 'structure', 'required' => ['DatabaseName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName']]], 'DescribeDatabaseResponse' => ['type' => 'structure', 'members' => ['Database' => ['shape' => 'Database']]], 'DescribeEndpointsRequest' => ['type' => 'structure', 'members' => []], 'DescribeEndpointsResponse' => ['type' => 'structure', 'required' => ['Endpoints'], 'members' => ['Endpoints' => ['shape' => 'Endpoints']]], 'DescribeTableRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'TableName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'TableName' => ['shape' => 'ResourceName']]], 'DescribeTableResponse' => ['type' => 'structure', 'members' => ['Table' => ['shape' => 'Table']]], 'Dimension' => ['type' => 'structure', 'required' => ['Name', 'Value'], 'members' => ['Name' => ['shape' => 'SchemaName'], 'Value' => ['shape' => 'SchemaValue'], 'DimensionValueType' => ['shape' => 'DimensionValueType']]], 'DimensionValueType' => ['type' => 'string', 'enum' => ['VARCHAR']], 'Dimensions' => ['type' => 'list', 'member' => ['shape' => 'Dimension'], 'max' => 128], 'Endpoint' => ['type' => 'structure', 'required' => ['Address', 'CachePeriodInMinutes'], 'members' => ['Address' => ['shape' => 'String'], 'CachePeriodInMinutes' => ['shape' => 'Long']]], 'Endpoints' => ['type' => 'list', 'member' => ['shape' => 'Endpoint']], 'ErrorMessage' => ['type' => 'string'], 'Integer' => ['type' => 'integer'], 'InternalServerException' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true, 'fault' => \true], 'InvalidEndpointException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ListDatabasesRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'PaginationLimit']]], 'ListDatabasesResponse' => ['type' => 'structure', 'members' => ['Databases' => ['shape' => 'DatabaseList'], 'NextToken' => ['shape' => 'String']]], 'ListTablesRequest' => ['type' => 'structure', 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'NextToken' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'PaginationLimit']]], 'ListTablesResponse' => ['type' => 'structure', 'members' => ['Tables' => ['shape' => 'TableList'], 'NextToken' => ['shape' => 'String']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN'], 'members' => ['ResourceARN' => ['shape' => 'AmazonResourceName']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList']]], 'Long' => ['type' => 'long'], 'MagneticStoreRejectedDataLocation' => ['type' => 'structure', 'members' => ['S3Configuration' => ['shape' => 'S3Configuration']]], 'MagneticStoreRetentionPeriodInDays' => ['type' => 'long', 'max' => 73000, 'min' => 1], 'MagneticStoreWriteProperties' => ['type' => 'structure', 'required' => ['EnableMagneticStoreWrites'], 'members' => ['EnableMagneticStoreWrites' => ['shape' => 'Boolean'], 'MagneticStoreRejectedDataLocation' => ['shape' => 'MagneticStoreRejectedDataLocation']]], 'MeasureValue' => ['type' => 'structure', 'required' => ['Name', 'Value', 'Type'], 'members' => ['Name' => ['shape' => 'SchemaName'], 'Value' => ['shape' => 'StringValue2048'], 'Type' => ['shape' => 'MeasureValueType']]], 'MeasureValueType' => ['type' => 'string', 'enum' => ['DOUBLE', 'BIGINT', 'VARCHAR', 'BOOLEAN', 'TIMESTAMP', 'MULTI']], 'MeasureValues' => ['type' => 'list', 'member' => ['shape' => 'MeasureValue']], 'MemoryStoreRetentionPeriodInHours' => ['type' => 'long', 'max' => 8766, 'min' => 1], 'PaginationLimit' => ['type' => 'integer', 'box' => \true, 'max' => 20, 'min' => 1], 'Record' => ['type' => 'structure', 'members' => ['Dimensions' => ['shape' => 'Dimensions'], 'MeasureName' => ['shape' => 'SchemaName'], 'MeasureValue' => ['shape' => 'StringValue2048'], 'MeasureValueType' => ['shape' => 'MeasureValueType'], 'Time' => ['shape' => 'StringValue256'], 'TimeUnit' => ['shape' => 'TimeUnit'], 'Version' => ['shape' => 'RecordVersion', 'box' => \true], 'MeasureValues' => ['shape' => 'MeasureValues']]], 'RecordIndex' => ['type' => 'integer'], 'RecordVersion' => ['type' => 'long'], 'Records' => ['type' => 'list', 'member' => ['shape' => 'Record'], 'max' => 100, 'min' => 1], 'RecordsIngested' => ['type' => 'structure', 'members' => ['Total' => ['shape' => 'Integer'], 'MemoryStore' => ['shape' => 'Integer'], 'MagneticStore' => ['shape' => 'Integer']]], 'RejectedRecord' => ['type' => 'structure', 'members' => ['RecordIndex' => ['shape' => 'RecordIndex'], 'Reason' => ['shape' => 'ErrorMessage'], 'ExistingVersion' => ['shape' => 'RecordVersion', 'box' => \true]]], 'RejectedRecords' => ['type' => 'list', 'member' => ['shape' => 'RejectedRecord']], 'RejectedRecordsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'RejectedRecords' => ['shape' => 'RejectedRecords']], 'exception' => \true], 'ResourceCreateAPIName' => ['type' => 'string', 'pattern' => '[a-zA-Z0-9_.-]+'], 'ResourceName' => ['type' => 'string'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'RetentionProperties' => ['type' => 'structure', 'required' => ['MemoryStoreRetentionPeriodInHours', 'MagneticStoreRetentionPeriodInDays'], 'members' => ['MemoryStoreRetentionPeriodInHours' => ['shape' => 'MemoryStoreRetentionPeriodInHours'], 'MagneticStoreRetentionPeriodInDays' => ['shape' => 'MagneticStoreRetentionPeriodInDays']]], 'S3BucketName' => ['type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9]'], 'S3Configuration' => ['type' => 'structure', 'members' => ['BucketName' => ['shape' => 'S3BucketName'], 'ObjectKeyPrefix' => ['shape' => 'S3ObjectKeyPrefix'], 'EncryptionOption' => ['shape' => 'S3EncryptionOption'], 'KmsKeyId' => ['shape' => 'StringValue2048']]], 'S3EncryptionOption' => ['type' => 'string', 'enum' => ['SSE_S3', 'SSE_KMS']], 'S3ObjectKeyPrefix' => ['type' => 'string', 'max' => 928, 'min' => 1, 'pattern' => '[a-zA-Z0-9|!\\-_*\'\\(\\)]([a-zA-Z0-9]|[!\\-_*\'\\(\\)\\/.])+'], 'SchemaName' => ['type' => 'string', 'min' => 1], 'SchemaValue' => ['type' => 'string'], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'String' => ['type' => 'string'], 'StringValue2048' => ['type' => 'string', 'max' => 2048, 'min' => 1], 'StringValue256' => ['type' => 'string', 'max' => 256, 'min' => 1], 'Table' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'String'], 'TableName' => ['shape' => 'ResourceName'], 'DatabaseName' => ['shape' => 'ResourceName'], 'TableStatus' => ['shape' => 'TableStatus'], 'RetentionProperties' => ['shape' => 'RetentionProperties'], 'CreationTime' => ['shape' => 'Date'], 'LastUpdatedTime' => ['shape' => 'Date'], 'MagneticStoreWriteProperties' => ['shape' => 'MagneticStoreWriteProperties']]], 'TableList' => ['type' => 'list', 'member' => ['shape' => 'Table']], 'TableStatus' => ['type' => 'string', 'enum' => ['ACTIVE', 'DELETING']], 'Tag' => ['type' => 'structure', 'required' => ['Key', 'Value'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 200, 'min' => 0], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag'], 'max' => 200, 'min' => 0], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN', 'Tags'], 'members' => ['ResourceARN' => ['shape' => 'AmazonResourceName'], 'Tags' => ['shape' => 'TagList']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => []], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0], 'ThrottlingException' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'TimeUnit' => ['type' => 'string', 'enum' => ['MILLISECONDS', 'SECONDS', 'MICROSECONDS', 'NANOSECONDS']], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceARN', 'TagKeys'], 'members' => ['ResourceARN' => ['shape' => 'AmazonResourceName'], 'TagKeys' => ['shape' => 'TagKeyList']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => []], 'UpdateDatabaseRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'KmsKeyId'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'KmsKeyId' => ['shape' => 'StringValue2048']]], 'UpdateDatabaseResponse' => ['type' => 'structure', 'members' => ['Database' => ['shape' => 'Database']]], 'UpdateTableRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'TableName'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'TableName' => ['shape' => 'ResourceName'], 'RetentionProperties' => ['shape' => 'RetentionProperties'], 'MagneticStoreWriteProperties' => ['shape' => 'MagneticStoreWriteProperties']]], 'UpdateTableResponse' => ['type' => 'structure', 'members' => ['Table' => ['shape' => 'Table']]], 'ValidationException' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'WriteRecordsRequest' => ['type' => 'structure', 'required' => ['DatabaseName', 'TableName', 'Records'], 'members' => ['DatabaseName' => ['shape' => 'ResourceName'], 'TableName' => ['shape' => 'ResourceName'], 'CommonAttributes' => ['shape' => 'Record'], 'Records' => ['shape' => 'Records']]], 'WriteRecordsResponse' => ['type' => 'structure', 'members' => ['RecordsIngested' => ['shape' => 'RecordsIngested']]]]];
