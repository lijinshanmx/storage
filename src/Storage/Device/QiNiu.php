<?php

namespace Utopia\Storage\Device;

use Utopia\Storage\Device\S3;

class QiNiu extends S3
{
    /**
     * Regions constants
     *
     */
    const CN_CENTRAL_1='cn-north-1';


    /**
     * Object Storage Constructor
     *
     * @param string $root
     * @param string $accessKey
     * @param string $secretKey
     * @param string $bucket
     * @param string $region
     * @param string $acl
     */
    public function __construct(string $root, string $accessKey, string $secretKey, string $bucket, string $region = self::CN_CENTRAL_1, string $acl = self::ACL_PRIVATE)
    {
        parent::__construct($root, $accessKey, $secretKey, $bucket, $region, $acl);
        $this->headers['host'] = $bucket.'.'.$region.'.'.'qiniucs.com';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'QiNiu Object Storage';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'QiNiu Object Storage';
    }
}
