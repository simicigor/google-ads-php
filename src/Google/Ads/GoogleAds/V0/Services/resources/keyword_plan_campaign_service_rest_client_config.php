<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.KeywordPlanCampaignService' => [
            'GetKeywordPlanCampaign' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/keywordPlanCampaigns/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateKeywordPlanCampaigns' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}/keywordPlanCampaigns:mutate',
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
