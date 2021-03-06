<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/custom_interest_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\CustomInterestTypeEnum;

/**
 * Enum containing possible custom interest types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.CustomInterestTypeEnum.CustomInterestType</code>
 */
class CustomInterestType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Allows brand advertisers to define custom affinity audience lists.
     *
     * Generated from protobuf enum <code>CUSTOM_AFFINITY = 2;</code>
     */
    const CUSTOM_AFFINITY = 2;
    /**
     * Allows advertisers to define custom intent audience lists.
     *
     * Generated from protobuf enum <code>CUSTOM_INTENT = 3;</code>
     */
    const CUSTOM_INTENT = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomInterestType::class, \Google\Ads\GoogleAds\V1\Enums\CustomInterestTypeEnum_CustomInterestType::class);

