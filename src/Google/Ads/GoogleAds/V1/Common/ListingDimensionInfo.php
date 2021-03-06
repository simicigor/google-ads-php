<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Listing dimensions for listing group criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ListingDimensionInfo</code>
 */
class ListingDimensionInfo extends \Google\Protobuf\Internal\Message
{
    protected $dimension;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V1\Common\ListingBrandInfo $listing_brand
     *           Brand of the listing.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelIdInfo $hotel_id
     *           Advertiser-specific hotel ID.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelClassInfo $hotel_class
     *           Class of the hotel as a number of stars 1 to 5.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelCountryRegionInfo $hotel_country_region
     *           Country or Region the hotel is located in.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelStateInfo $hotel_state
     *           State the hotel is located in.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelCityInfo $hotel_city
     *           City the hotel is located in.
     *     @type \Google\Ads\GoogleAds\V1\Common\ListingCustomAttributeInfo $listing_custom_attribute
     *           Listing custom attribute.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductBiddingCategoryInfo $product_bidding_category
     *           Bidding category of a product offer.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductChannelInfo $product_channel
     *           Locality of a product offer.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductChannelExclusivityInfo $product_channel_exclusivity
     *           Availability of a product offer.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductConditionInfo $product_condition
     *           Condition of a product offer.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductOfferIdInfo $product_offer_id
     *           Id of a product offer.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProductTypeInfo $product_type
     *           Type of a product offer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Brand of the listing.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingBrandInfo listing_brand = 1;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ListingBrandInfo
     */
    public function getListingBrand()
    {
        return $this->readOneof(1);
    }

    /**
     * Brand of the listing.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingBrandInfo listing_brand = 1;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ListingBrandInfo $var
     * @return $this
     */
    public function setListingBrand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ListingBrandInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Advertiser-specific hotel ID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelIdInfo hotel_id = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelIdInfo
     */
    public function getHotelId()
    {
        return $this->readOneof(2);
    }

    /**
     * Advertiser-specific hotel ID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelIdInfo hotel_id = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelIdInfo $var
     * @return $this
     */
    public function setHotelId($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelIdInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Class of the hotel as a number of stars 1 to 5.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelClassInfo hotel_class = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelClassInfo
     */
    public function getHotelClass()
    {
        return $this->readOneof(3);
    }

    /**
     * Class of the hotel as a number of stars 1 to 5.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelClassInfo hotel_class = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelClassInfo $var
     * @return $this
     */
    public function setHotelClass($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelClassInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Country or Region the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCountryRegionInfo hotel_country_region = 4;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelCountryRegionInfo
     */
    public function getHotelCountryRegion()
    {
        return $this->readOneof(4);
    }

    /**
     * Country or Region the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCountryRegionInfo hotel_country_region = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelCountryRegionInfo $var
     * @return $this
     */
    public function setHotelCountryRegion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelCountryRegionInfo::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * State the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelStateInfo hotel_state = 5;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelStateInfo
     */
    public function getHotelState()
    {
        return $this->readOneof(5);
    }

    /**
     * State the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelStateInfo hotel_state = 5;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelStateInfo $var
     * @return $this
     */
    public function setHotelState($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelStateInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * City the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCityInfo hotel_city = 6;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelCityInfo
     */
    public function getHotelCity()
    {
        return $this->readOneof(6);
    }

    /**
     * City the hotel is located in.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCityInfo hotel_city = 6;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelCityInfo $var
     * @return $this
     */
    public function setHotelCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelCityInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Listing custom attribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingCustomAttributeInfo listing_custom_attribute = 7;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ListingCustomAttributeInfo
     */
    public function getListingCustomAttribute()
    {
        return $this->readOneof(7);
    }

    /**
     * Listing custom attribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingCustomAttributeInfo listing_custom_attribute = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ListingCustomAttributeInfo $var
     * @return $this
     */
    public function setListingCustomAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ListingCustomAttributeInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Bidding category of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductBiddingCategoryInfo product_bidding_category = 13;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductBiddingCategoryInfo
     */
    public function getProductBiddingCategory()
    {
        return $this->readOneof(13);
    }

    /**
     * Bidding category of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductBiddingCategoryInfo product_bidding_category = 13;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductBiddingCategoryInfo $var
     * @return $this
     */
    public function setProductBiddingCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductBiddingCategoryInfo::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Locality of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductChannelInfo product_channel = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductChannelInfo
     */
    public function getProductChannel()
    {
        return $this->readOneof(8);
    }

    /**
     * Locality of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductChannelInfo product_channel = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductChannelInfo $var
     * @return $this
     */
    public function setProductChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductChannelInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Availability of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductChannelExclusivityInfo product_channel_exclusivity = 9;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductChannelExclusivityInfo
     */
    public function getProductChannelExclusivity()
    {
        return $this->readOneof(9);
    }

    /**
     * Availability of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductChannelExclusivityInfo product_channel_exclusivity = 9;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductChannelExclusivityInfo $var
     * @return $this
     */
    public function setProductChannelExclusivity($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductChannelExclusivityInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Condition of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductConditionInfo product_condition = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductConditionInfo
     */
    public function getProductCondition()
    {
        return $this->readOneof(10);
    }

    /**
     * Condition of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductConditionInfo product_condition = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductConditionInfo $var
     * @return $this
     */
    public function setProductCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductConditionInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Id of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductOfferIdInfo product_offer_id = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductOfferIdInfo
     */
    public function getProductOfferId()
    {
        return $this->readOneof(11);
    }

    /**
     * Id of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductOfferIdInfo product_offer_id = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductOfferIdInfo $var
     * @return $this
     */
    public function setProductOfferId($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductOfferIdInfo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Type of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductTypeInfo product_type = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProductTypeInfo
     */
    public function getProductType()
    {
        return $this->readOneof(12);
    }

    /**
     * Type of a product offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProductTypeInfo product_type = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProductTypeInfo $var
     * @return $this
     */
    public function setProductType($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProductTypeInfo::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDimension()
    {
        return $this->whichOneof("dimension");
    }

}

