<?php

use League\Flysystem\Filesystem;

// AWS S3 V3
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

// Local
use League\Flysystem\Adapter\Local;

// Additional Adapters can go here:

switch(getenv("FILESYSTEM_TYPE")) {

    case 'Null':
        // The null adapter isn't very helpful for testing
        // Files can't be read.
        $adapter = new League\Flysystem\Adapter\NullAdapter;
        break;

    case 'AWS_S3V3':
        $client = new S3Client([
            'credentials' => [
                'key'    => getenv("AWS_S3V3_ACCESS_KEY"),
                'secret' => getenv("AWS_S3V3_SECRET_KEY")
            ],
            'region' => getenv("AWS_S3V3_REGION"),
            'version' => getenv("AWS_S3V3_VERSION"),
        ]);
        $adapter = new AwsS3Adapter($client, getenv("AWS_S3V3_BUCKET_NAME"));
        break;
    case 'Local':
    default:
        $adapter = new Local(getenv("LOCAL_PATH"));
        break;

        break;
}

$filesystem = new Filesystem($adapter);
