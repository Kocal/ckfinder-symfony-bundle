<?php

namespace _CKFinder_Vendor_Prefix\Aws\Arn\S3;

use _CKFinder_Vendor_Prefix\Aws\Arn\ArnInterface;
/**
 * @internal
 */
interface BucketArnInterface extends ArnInterface
{
    public function getBucketName();
}
