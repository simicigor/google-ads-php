<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/criterion_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\CriterionErrorEnum;

/**
 * Enum describing possible criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.CriterionErrorEnum.CriterionError</code>
 */
class CriterionError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Concrete type of criterion is required for CREATE and UPDATE operations.
     *
     * Generated from protobuf enum <code>CONCRETE_TYPE_REQUIRED = 2;</code>
     */
    const CONCRETE_TYPE_REQUIRED = 2;
    /**
     * The category requested for exclusion is invalid.
     *
     * Generated from protobuf enum <code>INVALID_EXCLUDED_CATEGORY = 3;</code>
     */
    const INVALID_EXCLUDED_CATEGORY = 3;
    /**
     * Invalid keyword criteria text.
     *
     * Generated from protobuf enum <code>INVALID_KEYWORD_TEXT = 4;</code>
     */
    const INVALID_KEYWORD_TEXT = 4;
    /**
     * Keyword text should be less than 80 chars.
     *
     * Generated from protobuf enum <code>KEYWORD_TEXT_TOO_LONG = 5;</code>
     */
    const KEYWORD_TEXT_TOO_LONG = 5;
    /**
     * Keyword text has too many words.
     *
     * Generated from protobuf enum <code>KEYWORD_HAS_TOO_MANY_WORDS = 6;</code>
     */
    const KEYWORD_HAS_TOO_MANY_WORDS = 6;
    /**
     * Keyword text has invalid characters or symbols.
     *
     * Generated from protobuf enum <code>KEYWORD_HAS_INVALID_CHARS = 7;</code>
     */
    const KEYWORD_HAS_INVALID_CHARS = 7;
    /**
     * Invalid placement URL.
     *
     * Generated from protobuf enum <code>INVALID_PLACEMENT_URL = 8;</code>
     */
    const INVALID_PLACEMENT_URL = 8;
    /**
     * Invalid user list criterion.
     *
     * Generated from protobuf enum <code>INVALID_USER_LIST = 9;</code>
     */
    const INVALID_USER_LIST = 9;
    /**
     * Invalid user interest criterion.
     *
     * Generated from protobuf enum <code>INVALID_USER_INTEREST = 10;</code>
     */
    const INVALID_USER_INTEREST = 10;
    /**
     * Placement URL has wrong format.
     *
     * Generated from protobuf enum <code>INVALID_FORMAT_FOR_PLACEMENT_URL = 11;</code>
     */
    const INVALID_FORMAT_FOR_PLACEMENT_URL = 11;
    /**
     * Placement URL is too long.
     *
     * Generated from protobuf enum <code>PLACEMENT_URL_IS_TOO_LONG = 12;</code>
     */
    const PLACEMENT_URL_IS_TOO_LONG = 12;
    /**
     * Indicates the URL contains an illegal character.
     *
     * Generated from protobuf enum <code>PLACEMENT_URL_HAS_ILLEGAL_CHAR = 13;</code>
     */
    const PLACEMENT_URL_HAS_ILLEGAL_CHAR = 13;
    /**
     * Indicates the URL contains multiple comma separated URLs.
     *
     * Generated from protobuf enum <code>PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE = 14;</code>
     */
    const PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE = 14;
    /**
     * Indicates the domain is blacklisted.
     *
     * Generated from protobuf enum <code>PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION = 15;</code>
     */
    const PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION = 15;
    /**
     * Invalid topic path.
     *
     * Generated from protobuf enum <code>INVALID_TOPIC_PATH = 16;</code>
     */
    const INVALID_TOPIC_PATH = 16;
    /**
     * The YouTube Channel Id is invalid.
     *
     * Generated from protobuf enum <code>INVALID_YOUTUBE_CHANNEL_ID = 17;</code>
     */
    const INVALID_YOUTUBE_CHANNEL_ID = 17;
    /**
     * The YouTube Video Id is invalid.
     *
     * Generated from protobuf enum <code>INVALID_YOUTUBE_VIDEO_ID = 18;</code>
     */
    const INVALID_YOUTUBE_VIDEO_ID = 18;
    /**
     * Indicates the placement is a YouTube vertical channel, which is no longer
     * supported.
     *
     * Generated from protobuf enum <code>YOUTUBE_VERTICAL_CHANNEL_DEPRECATED = 19;</code>
     */
    const YOUTUBE_VERTICAL_CHANNEL_DEPRECATED = 19;
    /**
     * Indicates the placement is a YouTube demographic channel, which is no
     * longer supported.
     *
     * Generated from protobuf enum <code>YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED = 20;</code>
     */
    const YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED = 20;
    /**
     * YouTube urls are not supported in Placement criterion. Use YouTubeChannel
     * and YouTubeVideo criterion instead.
     *
     * Generated from protobuf enum <code>YOUTUBE_URL_UNSUPPORTED = 21;</code>
     */
    const YOUTUBE_URL_UNSUPPORTED = 21;
    /**
     * Criteria type can not be excluded by the customer, like AOL account type
     * cannot target site type criteria.
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_CRITERIA_TYPE = 22;</code>
     */
    const CANNOT_EXCLUDE_CRITERIA_TYPE = 22;
    /**
     * Criteria type can not be targeted.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_CRITERIA_TYPE = 23;</code>
     */
    const CANNOT_ADD_CRITERIA_TYPE = 23;
    /**
     * Product filter in the product criteria has invalid characters. Operand
     * and the argument in the filter can not have "==" or "&+".
     *
     * Generated from protobuf enum <code>INVALID_PRODUCT_FILTER = 24;</code>
     */
    const INVALID_PRODUCT_FILTER = 24;
    /**
     * Product filter in the product criteria is translated to a string as
     * operand1==argument1&+operand2==argument2, maximum allowed length for the
     * string is 255 chars.
     *
     * Generated from protobuf enum <code>PRODUCT_FILTER_TOO_LONG = 25;</code>
     */
    const PRODUCT_FILTER_TOO_LONG = 25;
    /**
     * Not allowed to exclude similar user list.
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_SIMILAR_USER_LIST = 26;</code>
     */
    const CANNOT_EXCLUDE_SIMILAR_USER_LIST = 26;
    /**
     * Not allowed to target a closed user list.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_CLOSED_USER_LIST = 27;</code>
     */
    const CANNOT_ADD_CLOSED_USER_LIST = 27;
    /**
     * Not allowed to add display only UserLists to search only campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS = 28;</code>
     */
    const CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS = 28;
    /**
     * Not allowed to add display only UserLists to search plus campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS = 29;</code>
     */
    const CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS = 29;
    /**
     * Not allowed to add display only UserLists to shopping campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS = 30;</code>
     */
    const CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS = 30;
    /**
     * Not allowed to add User interests to search only campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS = 31;</code>
     */
    const CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS = 31;
    /**
     * Not allowed to set bids for this criterion type in search campaigns
     *
     * Generated from protobuf enum <code>CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS = 32;</code>
     */
    const CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS = 32;
    /**
     * Final URLs, URL Templates and CustomParameters cannot be set for the
     * criterion types of Gender, AgeRange, UserList, Placement, MobileApp, and
     * MobileAppCategory in search campaigns and shopping campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE = 33;</code>
     */
    const CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE = 33;
    /**
     * IP address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_IP_ADDRESS = 34;</code>
     */
    const INVALID_IP_ADDRESS = 34;
    /**
     * IP format is not valid.
     *
     * Generated from protobuf enum <code>INVALID_IP_FORMAT = 35;</code>
     */
    const INVALID_IP_FORMAT = 35;
    /**
     * Mobile application is not valid.
     *
     * Generated from protobuf enum <code>INVALID_MOBILE_APP = 36;</code>
     */
    const INVALID_MOBILE_APP = 36;
    /**
     * Mobile application category is not valid.
     *
     * Generated from protobuf enum <code>INVALID_MOBILE_APP_CATEGORY = 37;</code>
     */
    const INVALID_MOBILE_APP_CATEGORY = 37;
    /**
     * The CriterionId does not exist or is of the incorrect type.
     *
     * Generated from protobuf enum <code>INVALID_CRITERION_ID = 38;</code>
     */
    const INVALID_CRITERION_ID = 38;
    /**
     * The Criterion is not allowed to be targeted.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CRITERION = 39;</code>
     */
    const CANNOT_TARGET_CRITERION = 39;
    /**
     * The criterion is not allowed to be targeted as it is deprecated.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_OBSOLETE_CRITERION = 40;</code>
     */
    const CANNOT_TARGET_OBSOLETE_CRITERION = 40;
    /**
     * The CriterionId is not valid for the type.
     *
     * Generated from protobuf enum <code>CRITERION_ID_AND_TYPE_MISMATCH = 41;</code>
     */
    const CRITERION_ID_AND_TYPE_MISMATCH = 41;
    /**
     * Distance for the radius for the proximity criterion is invalid.
     *
     * Generated from protobuf enum <code>INVALID_PROXIMITY_RADIUS = 42;</code>
     */
    const INVALID_PROXIMITY_RADIUS = 42;
    /**
     * Units for the distance for the radius for the proximity criterion is
     * invalid.
     *
     * Generated from protobuf enum <code>INVALID_PROXIMITY_RADIUS_UNITS = 43;</code>
     */
    const INVALID_PROXIMITY_RADIUS_UNITS = 43;
    /**
     * Street address in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_STREETADDRESS_LENGTH = 44;</code>
     */
    const INVALID_STREETADDRESS_LENGTH = 44;
    /**
     * City name in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_CITYNAME_LENGTH = 45;</code>
     */
    const INVALID_CITYNAME_LENGTH = 45;
    /**
     * Region code in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_REGIONCODE_LENGTH = 46;</code>
     */
    const INVALID_REGIONCODE_LENGTH = 46;
    /**
     * Region name in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_REGIONNAME_LENGTH = 47;</code>
     */
    const INVALID_REGIONNAME_LENGTH = 47;
    /**
     * Postal code in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_POSTALCODE_LENGTH = 48;</code>
     */
    const INVALID_POSTALCODE_LENGTH = 48;
    /**
     * Country code in the address is not valid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 49;</code>
     */
    const INVALID_COUNTRY_CODE = 49;
    /**
     * Latitude for the GeoPoint is not valid.
     *
     * Generated from protobuf enum <code>INVALID_LATITUDE = 50;</code>
     */
    const INVALID_LATITUDE = 50;
    /**
     * Longitude for the GeoPoint is not valid.
     *
     * Generated from protobuf enum <code>INVALID_LONGITUDE = 51;</code>
     */
    const INVALID_LONGITUDE = 51;
    /**
     * The Proximity input is not valid. Both address and geoPoint cannot be
     * null.
     *
     * Generated from protobuf enum <code>PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL = 52;</code>
     */
    const PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL = 52;
    /**
     * The Proximity address cannot be geocoded to a valid lat/long.
     *
     * Generated from protobuf enum <code>INVALID_PROXIMITY_ADDRESS = 53;</code>
     */
    const INVALID_PROXIMITY_ADDRESS = 53;
    /**
     * User domain name is not valid.
     *
     * Generated from protobuf enum <code>INVALID_USER_DOMAIN_NAME = 54;</code>
     */
    const INVALID_USER_DOMAIN_NAME = 54;
    /**
     * Length of serialized criterion parameter exceeded size limit.
     *
     * Generated from protobuf enum <code>CRITERION_PARAMETER_TOO_LONG = 55;</code>
     */
    const CRITERION_PARAMETER_TOO_LONG = 55;
    /**
     * Time interval in the AdSchedule overlaps with another AdSchedule.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 56;</code>
     */
    const AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 56;
    /**
     * AdSchedule time interval cannot span multiple days.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 57;</code>
     */
    const AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 57;
    /**
     * AdSchedule time interval specified is invalid, endTime cannot be earlier
     * than startTime.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE_INVALID_TIME_INTERVAL = 58;</code>
     */
    const AD_SCHEDULE_INVALID_TIME_INTERVAL = 58;
    /**
     * The number of AdSchedule entries in a day exceeds the limit.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 59;</code>
     */
    const AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 59;
    /**
     * CriteriaId does not match the interval of the AdSchedule specified.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS = 60;</code>
     */
    const AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS = 60;
    /**
     * Cannot set bid modifier for this criterion type.
     *
     * Generated from protobuf enum <code>CANNOT_BID_MODIFY_CRITERION_TYPE = 61;</code>
     */
    const CANNOT_BID_MODIFY_CRITERION_TYPE = 61;
    /**
     * Cannot bid modify criterion, since it is opted out of the campaign.
     *
     * Generated from protobuf enum <code>CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT = 62;</code>
     */
    const CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT = 62;
    /**
     * Cannot set bid modifier for a negative criterion.
     *
     * Generated from protobuf enum <code>CANNOT_BID_MODIFY_NEGATIVE_CRITERION = 63;</code>
     */
    const CANNOT_BID_MODIFY_NEGATIVE_CRITERION = 63;
    /**
     * Bid Modifier already exists. Use SET operation to update.
     *
     * Generated from protobuf enum <code>BID_MODIFIER_ALREADY_EXISTS = 64;</code>
     */
    const BID_MODIFIER_ALREADY_EXISTS = 64;
    /**
     * Feed Id is not allowed in these Location Groups.
     *
     * Generated from protobuf enum <code>FEED_ID_NOT_ALLOWED = 65;</code>
     */
    const FEED_ID_NOT_ALLOWED = 65;
    /**
     * The account may not use the requested criteria type. For example, some
     * accounts are restricted to keywords only.
     *
     * Generated from protobuf enum <code>ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE = 66;</code>
     */
    const ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE = 66;
    /**
     * The requested criteria type cannot be used with campaign or ad group
     * bidding strategy.
     *
     * Generated from protobuf enum <code>CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY = 67;</code>
     */
    const CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY = 67;
    /**
     * The Criterion is not allowed to be excluded.
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_CRITERION = 68;</code>
     */
    const CANNOT_EXCLUDE_CRITERION = 68;
    /**
     * The criterion is not allowed to be removed. For example, we cannot remove
     * any of the device criterion.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_CRITERION = 69;</code>
     */
    const CANNOT_REMOVE_CRITERION = 69;
    /**
     * The combined length of product dimension values of the product scope
     * criterion is too long.
     *
     * Generated from protobuf enum <code>PRODUCT_SCOPE_TOO_LONG = 70;</code>
     */
    const PRODUCT_SCOPE_TOO_LONG = 70;
    /**
     * Product scope contains too many dimensions.
     *
     * Generated from protobuf enum <code>PRODUCT_SCOPE_TOO_MANY_DIMENSIONS = 71;</code>
     */
    const PRODUCT_SCOPE_TOO_MANY_DIMENSIONS = 71;
    /**
     * The combined length of product dimension values of the product partition
     * criterion is too long.
     *
     * Generated from protobuf enum <code>PRODUCT_PARTITION_TOO_LONG = 72;</code>
     */
    const PRODUCT_PARTITION_TOO_LONG = 72;
    /**
     * Product partition contains too many dimensions.
     *
     * Generated from protobuf enum <code>PRODUCT_PARTITION_TOO_MANY_DIMENSIONS = 73;</code>
     */
    const PRODUCT_PARTITION_TOO_MANY_DIMENSIONS = 73;
    /**
     * The product dimension is invalid (e.g. dimension contains illegal value,
     * dimension type is represented with wrong class, etc). Product dimension
     * value can not contain "==" or "&+".
     *
     * Generated from protobuf enum <code>INVALID_PRODUCT_DIMENSION = 74;</code>
     */
    const INVALID_PRODUCT_DIMENSION = 74;
    /**
     * Product dimension type is either invalid for campaigns of this type or
     * cannot be used in the current context. BIDDING_CATEGORY_Lx and
     * PRODUCT_TYPE_Lx product dimensions must be used in ascending order of
     * their levels: L1, L2, L3, L4, L5... The levels must be specified
     * sequentially and start from L1. Furthermore, an "others" product
     * partition cannot be subdivided with a dimension of the same type but of a
     * higher level ("others" BIDDING_CATEGORY_L3 can be subdivided with BRAND
     * but not with BIDDING_CATEGORY_L4).
     *
     * Generated from protobuf enum <code>INVALID_PRODUCT_DIMENSION_TYPE = 75;</code>
     */
    const INVALID_PRODUCT_DIMENSION_TYPE = 75;
    /**
     * Bidding categories do not form a valid path in the Shopping bidding
     * category taxonomy.
     *
     * Generated from protobuf enum <code>INVALID_PRODUCT_BIDDING_CATEGORY = 76;</code>
     */
    const INVALID_PRODUCT_BIDDING_CATEGORY = 76;
    /**
     * ShoppingSetting must be added to the campaign before ProductScope
     * criteria can be added.
     *
     * Generated from protobuf enum <code>MISSING_SHOPPING_SETTING = 77;</code>
     */
    const MISSING_SHOPPING_SETTING = 77;
    /**
     * Matching function is invalid.
     *
     * Generated from protobuf enum <code>INVALID_MATCHING_FUNCTION = 78;</code>
     */
    const INVALID_MATCHING_FUNCTION = 78;
    /**
     * Filter parameters not allowed for location groups targeting.
     *
     * Generated from protobuf enum <code>LOCATION_FILTER_NOT_ALLOWED = 79;</code>
     */
    const LOCATION_FILTER_NOT_ALLOWED = 79;
    /**
     * Given location filter parameter is invalid for location groups targeting.
     *
     * Generated from protobuf enum <code>LOCATION_FILTER_INVALID = 80;</code>
     */
    const LOCATION_FILTER_INVALID = 80;
    /**
     * Criteria type cannot be associated with a campaign and its ad group(s)
     * simultaneously.
     *
     * Generated from protobuf enum <code>CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP = 81;</code>
     */
    const CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP = 81;
    /**
     * Range represented by hotel length of stay's min nights and max nights
     * overlaps with an existing criterion.
     *
     * Generated from protobuf enum <code>HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION = 82;</code>
     */
    const HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION = 82;
    /**
     * Range represented by hotel advance booking window's min days and max days
     * overlaps with an existing criterion.
     *
     * Generated from protobuf enum <code>HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION = 83;</code>
     */
    const HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION = 83;
    /**
     * The field is not allowed to be set when the negative field is set to
     * true, e.g. we don't allow bids in negative ad group or campaign criteria.
     *
     * Generated from protobuf enum <code>FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING = 84;</code>
     */
    const FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING = 84;
    /**
     * The combination of operand and operator in webpage condition is invalid.
     *
     * Generated from protobuf enum <code>INVALID_WEBPAGE_CONDITION = 85;</code>
     */
    const INVALID_WEBPAGE_CONDITION = 85;
    /**
     * The URL of webpage condition is invalid.
     *
     * Generated from protobuf enum <code>INVALID_WEBPAGE_CONDITION_URL = 86;</code>
     */
    const INVALID_WEBPAGE_CONDITION_URL = 86;
    /**
     * The URL of webpage condition cannot be empty or contain white space.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY = 87;</code>
     */
    const WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY = 87;
    /**
     * The URL of webpage condition contains an unsupported protocol.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL = 88;</code>
     */
    const WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL = 88;
    /**
     * The URL of webpage condition cannot be an IP address.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS = 89;</code>
     */
    const WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS = 89;
    /**
     * The domain of the URL is not consistent with the domain in campaign
     * setting.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING = 90;</code>
     */
    const WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING = 90;
    /**
     * The URL of webpage condition cannot be a public suffix itself.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX = 91;</code>
     */
    const WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX = 91;
    /**
     * The URL of webpage condition has an invalid public suffix.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX = 92;</code>
     */
    const WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX = 92;
    /**
     * Value track parameter is not supported in webpage condition URL.
     *
     * Generated from protobuf enum <code>WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED = 93;</code>
     */
    const WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED = 93;
    /**
     * Only one URL-EQUALS webpage condition is allowed in a webpage
     * criterion and it cannot be combined with other conditions.
     *
     * Generated from protobuf enum <code>WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION = 94;</code>
     */
    const WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION = 94;
    /**
     * A webpage criterion cannot be added to a non-DSA ad group.
     *
     * Generated from protobuf enum <code>WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP = 95;</code>
     */
    const WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP = 95;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CriterionError::class, \Google\Ads\GoogleAds\V1\Errors\CriterionErrorEnum_CriterionError::class);

