<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Common;

class Simulation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
๋
/google/ads/googleads/v6/common/simulation.protogoogle.ads.googleads.v6.common"l
BidModifierSimulationPointListJ
points (2:.google.ads.googleads.v6.common.BidModifierSimulationPoint"b
CpcBidSimulationPointListE
points (25.google.ads.googleads.v6.common.CpcBidSimulationPoint"b
CpvBidSimulationPointListE
points (25.google.ads.googleads.v6.common.CpvBidSimulationPoint"h
TargetCpaSimulationPointListH
points (28.google.ads.googleads.v6.common.TargetCpaSimulationPoint"j
TargetRoasSimulationPointListI
points (29.google.ads.googleads.v6.common.TargetRoasSimulationPoint"p
 PercentCpcBidSimulationPointListL
points (2<.google.ads.googleads.v6.common.PercentCpcBidSimulationPoint"า
BidModifierSimulationPoint
bid_modifier (H !
biddable_conversions (H\'
biddable_conversions_value (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (H(
parent_biddable_conversions (H.
!parent_biddable_conversions_value (H
parent_clicks (H	
parent_cost_micros (H

parent_impressions (H(
parent_top_slot_impressions (H*
parent_required_budget_micros (HB
_bid_modifierB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressionsB
_parent_biddable_conversionsB$
"_parent_biddable_conversions_valueB
_parent_clicksB
_parent_cost_microsB
_parent_impressionsB
_parent_top_slot_impressionsB 
_parent_required_budget_micros"๛
CpcBidSimulationPoint
cpc_bid_micros (H !
biddable_conversions	 (H\'
biddable_conversions_value
 (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"น
CpvBidSimulationPoint
cpv_bid_micros (H 
cost_micros (H
impressions (H
views (HB
_cpv_bid_microsB
_cost_microsB
_impressionsB
_views"
TargetCpaSimulationPoint
target_cpa_micros (H !
biddable_conversions	 (H\'
biddable_conversions_value
 (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_target_cpa_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"๙
TargetRoasSimulationPoint
target_roas (H !
biddable_conversions	 (H\'
biddable_conversions_value
 (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_target_roasB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"
PercentCpcBidSimulationPoint#
percent_cpc_bid_micros (H !
biddable_conversions (H\'
biddable_conversions_value (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_percent_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressionsB๊
"com.google.ads.googleads.v6.commonBSimulationProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;commonขGAAชGoogle.Ads.GoogleAds.V6.CommonสGoogle\\Ads\\GoogleAds\\V6\\Common๊"Google::Ads::GoogleAds::V6::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

