<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/bidding.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy which tries to maximize conversion value
 * given a daily budget.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.MaximizeConversionValue</code>
 */
class MaximizeConversionValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The target return on ad spend (ROAS) option. If set, the bid strategy will
     * maximize revenue while averaging the target return on ad spend. If the
     * target ROAS is high, the bid strategy may not be able to spend the full
     * budget. If the target ROAS is not set, the bid strategy will aim to
     * achieve the highest possible ROAS for the budget.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue target_roas = 1;</code>
     */
    private $target_roas = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $target_roas
     *           The target return on ad spend (ROAS) option. If set, the bid strategy will
     *           maximize revenue while averaging the target return on ad spend. If the
     *           target ROAS is high, the bid strategy may not be able to spend the full
     *           budget. If the target ROAS is not set, the bid strategy will aim to
     *           achieve the highest possible ROAS for the budget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The target return on ad spend (ROAS) option. If set, the bid strategy will
     * maximize revenue while averaging the target return on ad spend. If the
     * target ROAS is high, the bid strategy may not be able to spend the full
     * budget. If the target ROAS is not set, the bid strategy will aim to
     * achieve the highest possible ROAS for the budget.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue target_roas = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getTargetRoas()
    {
        return $this->target_roas;
    }

    /**
     * The target return on ad spend (ROAS) option. If set, the bid strategy will
     * maximize revenue while averaging the target return on ad spend. If the
     * target ROAS is high, the bid strategy may not be able to spend the full
     * budget. If the target ROAS is not set, the bid strategy will aim to
     * achieve the highest possible ROAS for the budget.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue target_roas = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->target_roas = $var;

        return $this;
    }

}

