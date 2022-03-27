<?php

namespace _CKFinder_Vendor_Prefix;

// This file was auto-generated from sdk-root/src/data/elasticloadbalancingv2/2015-12-01/waiters-2.json
return ['version' => 2, 'waiters' => ['LoadBalancerExists' => ['delay' => 15, 'operation' => 'DescribeLoadBalancers', 'maxAttempts' => 40, 'acceptors' => [['matcher' => 'status', 'expected' => 200, 'state' => 'success'], ['matcher' => 'error', 'expected' => 'LoadBalancerNotFound', 'state' => 'retry']]], 'LoadBalancerAvailable' => ['delay' => 15, 'operation' => 'DescribeLoadBalancers', 'maxAttempts' => 40, 'acceptors' => [['state' => 'success', 'matcher' => 'pathAll', 'argument' => 'LoadBalancers[].State.Code', 'expected' => 'active'], ['state' => 'retry', 'matcher' => 'pathAny', 'argument' => 'LoadBalancers[].State.Code', 'expected' => 'provisioning'], ['state' => 'retry', 'matcher' => 'error', 'expected' => 'LoadBalancerNotFound']]], 'LoadBalancersDeleted' => ['delay' => 15, 'operation' => 'DescribeLoadBalancers', 'maxAttempts' => 40, 'acceptors' => [['state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'LoadBalancers[].State.Code', 'expected' => 'active'], ['matcher' => 'error', 'expected' => 'LoadBalancerNotFound', 'state' => 'success']]], 'TargetInService' => ['delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeTargetHealth', 'acceptors' => [['argument' => 'TargetHealthDescriptions[].TargetHealth.State', 'expected' => 'healthy', 'matcher' => 'pathAll', 'state' => 'success'], ['matcher' => 'error', 'expected' => 'InvalidInstance', 'state' => 'retry']]], 'TargetDeregistered' => ['delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeTargetHealth', 'acceptors' => [['matcher' => 'error', 'expected' => 'InvalidTarget', 'state' => 'success'], ['argument' => 'TargetHealthDescriptions[].TargetHealth.State', 'expected' => 'unused', 'matcher' => 'pathAll', 'state' => 'success']]]]];
