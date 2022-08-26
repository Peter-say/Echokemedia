<?php

namespace App\Constants;

class EventConstants
{

    const TYPE_EMPOWERMENT = "EMPOWERMENT";
    const TYPE_CRYPTO = "CRYPTO";
    const TYPE_INFLUENCER = "INFLUENCER";

    const SUBTYPE_ZPOWER = "ZPOWER";
    const SUBTYPE_NFT = "NFT";
    const SUBTYPE_WHATSAPP_INFLUENCER = "WHATSAPP";

    const KEY_VOTE_FROM = "VOTE_FROM";
    const KEY_VOTE_TO = "VOTE_TO";

    const TYPE_OPTIONS = [
        self::TYPE_EMPOWERMENT => self::TYPE_EMPOWERMENT,
        self::TYPE_CRYPTO => self::TYPE_CRYPTO,
        self::TYPE_INFLUENCER => self::TYPE_INFLUENCER,
    ];

    const SUBTYPE_OPTIONS = [
        self::SUBTYPE_ZPOWER => self::SUBTYPE_ZPOWER,
        self::SUBTYPE_NFT => self::SUBTYPE_NFT ,
        self::SUBTYPE_WHATSAPP_INFLUENCER => self::SUBTYPE_WHATSAPP_INFLUENCER ,
    ];
}
