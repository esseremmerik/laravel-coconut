<?php

return [
    'api_key' => env('COCONUT_API_KEY',null),
    'region' => env('COCONUT_REGION','eu-west-1')

    /**
     * Default storage
     */
    'storage' => env('COCONUT_STORAGE','s3'),

    'storages' => [

        /**
         * Google cloud storage https://docs.coconut.co/jobs/storage#google-cloud-storage
         */
        'gcs' =>  [
            'service' => 'gcs',
            'bucket' => env('COCONUT_GCS_BUCKET',null),
            'credentials' => [
                'access_key_id' => env('COCONUT_GCS_KEY', null),
                'secret_access_key' => env('COCONUT_GCS_SECRET', null)
            ],
            'path' => '/'
        ],

        /**
         * AWS S3 storage https://docs.coconut.co/jobs/storage#aws-s3
         */

        's3' => [
            'service' => 's3',
            'region' => env('COCONUT_S3_REGION',null),
            'bucket' => env('COCONUT_S3_BUCKET',null),
            'credentials' => [
                'access_key_id' => env('COCONUT_S3_KEY', null),
                'secret_access_key' => env('COCONUT_S3_SECRET', null)
            ],
            'path' => '/'
        ],

        /**
         * DO Spaces storage https://docs.coconut.co/jobs/storage#do-spaces
         */

        'dospaces' => [
            'service' => 'dospaces',
            'region' => env('COCONUT_DO_REGION',null),
            'bucket' => env('COCONUT_DO_BUCKET',null),
            'credentials' => [
                'access_key_id' => env('COCONUT_DO_KEY', null),
                'secret_access_key' => env('COCONUT_DO_SECRET', null)
            ],
            'path' => '/'
        ]

    ],

    /**
     * Middlewares to add to the webhook route
     */
    'middleware' => []

    
];