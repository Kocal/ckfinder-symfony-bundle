<?php

namespace _CKFinder_Vendor_Prefix;

// This file was auto-generated from sdk-root/src/data/cloudcontrol/2021-09-30/waiters-2.json
return ['version' => 2, 'waiters' => ['ResourceRequestSuccess' => ['description' => 'Wait until resource operation request is successful', 'operation' => 'GetResourceRequestStatus', 'delay' => 5, 'maxAttempts' => 720, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'SUCCESS'], ['state' => 'failure', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'FAILED'], ['state' => 'failure', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'CANCEL_COMPLETE']]]]];
