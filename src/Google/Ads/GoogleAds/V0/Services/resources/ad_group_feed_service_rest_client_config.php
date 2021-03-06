<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.AdGroupFeedService' => [
            'GetAdGroupFeed' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/adGroupFeeds/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateAdGroupFeeds' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}/adGroupFeeds:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
