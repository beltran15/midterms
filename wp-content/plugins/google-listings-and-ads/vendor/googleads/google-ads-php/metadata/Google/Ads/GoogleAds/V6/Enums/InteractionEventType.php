<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/interaction_event_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class InteractionEventType
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
�
:google/ads/googleads/v6/enums/interaction_event_type.protogoogle.ads.googleads.v6.enums"�
InteractionEventTypeEnum"i
InteractionEventType
UNSPECIFIED 
UNKNOWN	
CLICK

ENGAGEMENT

VIDEO_VIEW
NONEB�
!com.google.ads.googleads.v6.enumsBInteractionEventTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

