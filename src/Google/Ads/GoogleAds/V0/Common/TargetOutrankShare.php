<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/bidding.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that sets bids based on the target fraction of
 * auctions where the advertiser should outrank a specific competitor.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.TargetOutrankShare</code>
 */
class TargetOutrankShare extends \Google\Protobuf\Internal\Message
{
    /**
     * The target fraction of auctions where the advertiser should outrank the
     * competitor.
     * The advertiser outranks the competitor in an auction if either the
     * advertiser appears above the competitor in the search results, or appears
     * in the search results when the competitor does not.
     * Value must be between 1 and 1000000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value target_outrank_share_micros = 1;</code>
     */
    private $target_outrank_share_micros = null;
    /**
     * Competitor's visible domain URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue competitor_domain = 2;</code>
     */
    private $competitor_domain = null;
    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     */
    private $cpc_bid_ceiling_micros = null;
    /**
     * Whether the strategy should always follow bid estimate changes,
     * or only increase.
     * If false, always set a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     */
    private $only_raise_cpc_bids = null;
    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 5;</code>
     */
    private $raise_cpc_bid_when_quality_score_is_low = null;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        parent::__construct();
    }

    /**
     * The target fraction of auctions where the advertiser should outrank the
     * competitor.
     * The advertiser outranks the competitor in an auction if either the
     * advertiser appears above the competitor in the search results, or appears
     * in the search results when the competitor does not.
     * Value must be between 1 and 1000000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value target_outrank_share_micros = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getTargetOutrankShareMicros()
    {
        return $this->target_outrank_share_micros;
    }

    /**
     * The target fraction of auctions where the advertiser should outrank the
     * competitor.
     * The advertiser outranks the competitor in an auction if either the
     * advertiser appears above the competitor in the search results, or appears
     * in the search results when the competitor does not.
     * Value must be between 1 and 1000000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value target_outrank_share_micros = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setTargetOutrankShareMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->target_outrank_share_micros = $var;

        return $this;
    }

    /**
     * Competitor's visible domain URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue competitor_domain = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCompetitorDomain()
    {
        return $this->competitor_domain;
    }

    /**
     * Competitor's visible domain URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue competitor_domain = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCompetitorDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->competitor_domain = $var;

        return $this;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Whether the strategy should always follow bid estimate changes,
     * or only increase.
     * If false, always set a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getOnlyRaiseCpcBids()
    {
        return $this->only_raise_cpc_bids;
    }

    /**
     * Whether the strategy should always follow bid estimate changes,
     * or only increase.
     * If false, always set a keyword's new bid to the current bid estimate.
     * If true, only updates a keyword's bid if the current bid estimate is
     * greater than the current bid.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue only_raise_cpc_bids = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setOnlyRaiseCpcBids($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->only_raise_cpc_bids = $var;

        return $this;
    }

    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 5;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getRaiseCpcBidWhenQualityScoreIsLow()
    {
        return $this->raise_cpc_bid_when_quality_score_is_low;
    }

    /**
     * Whether the strategy is allowed to raise bids on keywords with
     * lower-range quality scores.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue raise_cpc_bid_when_quality_score_is_low = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRaiseCpcBidWhenQualityScoreIsLow($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->raise_cpc_bid_when_quality_score_is_low = $var;

        return $this;
    }

}
