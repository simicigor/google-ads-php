<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/user_list_crm_data_source_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\UserListCrmDataSourceTypeEnum;

/**
 * Enum describing possible user list crm data source type.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.UserListCrmDataSourceTypeEnum.UserListCrmDataSourceType</code>
 */
class UserListCrmDataSourceType
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
     * The uploaded data is first party data.
     *
     * Generated from protobuf enum <code>FIRST_PARTY = 2;</code>
     */
    const FIRST_PARTY = 2;
    /**
     * The uploaded data is from a third party credit bureau.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_CREDIT_BUREAU = 3;</code>
     */
    const THIRD_PARTY_CREDIT_BUREAU = 3;
    /**
     * The uploaded data is from a third party voter file.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_VOTER_FILE = 4;</code>
     */
    const THIRD_PARTY_VOTER_FILE = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListCrmDataSourceType::class, \Google\Ads\GoogleAds\V0\Enums\UserListCrmDataSourceTypeEnum_UserListCrmDataSourceType::class);

