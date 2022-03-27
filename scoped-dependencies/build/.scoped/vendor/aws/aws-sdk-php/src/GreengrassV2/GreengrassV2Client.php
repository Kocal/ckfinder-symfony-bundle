<?php

namespace _CKFinder_Vendor_Prefix\Aws\GreengrassV2;

use _CKFinder_Vendor_Prefix\Aws\AwsClient;
/**
 * This client is used to interact with the **AWS IoT Greengrass V2** service.
 * @method \Aws\Result associateServiceRoleToAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceRoleToAccountAsync(array $args = [])
 * @method \Aws\Result batchAssociateClientDeviceWithCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateClientDeviceWithCoreDeviceAsync(array $args = [])
 * @method \Aws\Result batchDisassociateClientDeviceFromCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateClientDeviceFromCoreDeviceAsync(array $args = [])
 * @method \Aws\Result cancelDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelDeploymentAsync(array $args = [])
 * @method \Aws\Result createComponentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComponentVersionAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result deleteComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComponentAsync(array $args = [])
 * @method \Aws\Result deleteCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCoreDeviceAsync(array $args = [])
 * @method \Aws\Result describeComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComponentAsync(array $args = [])
 * @method \Aws\Result disassociateServiceRoleFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceRoleFromAccountAsync(array $args = [])
 * @method \Aws\Result getComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentAsync(array $args = [])
 * @method \Aws\Result getComponentVersionArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentVersionArtifactAsync(array $args = [])
 * @method \Aws\Result getConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectivityInfoAsync(array $args = [])
 * @method \Aws\Result getCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDeviceAsync(array $args = [])
 * @method \Aws\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Aws\Result getServiceRoleForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceRoleForAccountAsync(array $args = [])
 * @method \Aws\Result listClientDevicesAssociatedWithCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClientDevicesAssociatedWithCoreDeviceAsync(array $args = [])
 * @method \Aws\Result listComponentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentVersionsAsync(array $args = [])
 * @method \Aws\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \Aws\Result listCoreDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDevicesAsync(array $args = [])
 * @method \Aws\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \Aws\Result listEffectiveDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEffectiveDeploymentsAsync(array $args = [])
 * @method \Aws\Result listInstalledComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstalledComponentsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result resolveComponentCandidates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveComponentCandidatesAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectivityInfoAsync(array $args = [])
 */
class GreengrassV2Client extends AwsClient
{
}
