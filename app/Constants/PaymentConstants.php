<?php

namespace App\Constants;

class PaymentConstants
{
    const WALLET = "Wallet";
    const COUPON = "Coupon";

    const PAYMENT_OPTIONS = [
       "Wallet" => self::WALLET,
        "Coupon" => self::COUPON,
    ];

    const SUBSCRIBE_TO_MEMBERSHIP_PLAN = "SUBSCRIBE_TO_MEMBERSHIP_PLAN";
    const SUBSCRIBE_TO_PROMO_PLAN = "SUBSCRIBE_TO_PROMO_PLAN";
    const FUND_WALLET_WITH_CARD = "FUND_WALLET_WITH_CARD";
}
