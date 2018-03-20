<?php

use League\Flysystem\Filesystem;

// AWS S3 V3
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

// Local
use League\Flysystem\Adapter\Local;

switch(getenv("FILESYSTEM_TYPE")) {

    case 'null':
        // The null adapter isn't very helpful for testing
        // Files can't be read.
        $adapter = new League\Flysystem\Adapter\NullAdapter;
        break;

    case 'AWS_S3_V3':
        $client = new S3Client([
            'credentials' => [
                'key'    => getenv("ACCESS_KEY"),
                'secret' => getenv("SECRET_KEY")
            ],
            'region' => getenv("REGION"),
            'version' => getenv("VERSION"),
        ]);
        $adapter = new AwsS3Adapter($client, getenv("BUCKET_NAME"));
        break;
    case 'memory':

        break;
    case 'Local':
    case 'local':
        $adapter = new Local(getenv("LOCAL_PATH"));
        break;

    default:
        break;
}

$filesystem = new Filesystem($adapter);
