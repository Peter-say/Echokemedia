<?php

namespace App\Constants;

class AppConstants
{
    const REGISTER_BONUS = 250000;
    const ZERO = 0;
    const ONE = 1;

    const MAX_PROFILE_PIC_SIZE = 2048;

    const MALE = 'Male';
    const FEMALE = 'Female';
    const OTHERS = 'Others';

    const SINGLE = 'Single';
    const MARRIED = 'Married';
    const WIDOWED = 'Widowed';
    const DIVORCED = 'Divorced';
    const SEPERATED = 'Seperated';

    const MARITAL_STATUS = [
        self::SINGLE,
        self::MARRIED,
        self::WIDOWED,
        self::DIVORCED,
        self::SEPERATED,
    ];


    const GENDERS = [
        self::MALE,
        self::FEMALE,
        self::OTHERS,
    ];

    const PILL_CLASSES = [
        TransactionConstants::CREDIT => "success",
        StatusConstants::COMPLETED => "success",
        StatusConstants::PENDING => "primary",
        StatusConstants::PROCESSING => "info",
        StatusConstants::ACTIVE => "success",
        StatusConstants::INACTIVE => "danger",
        StatusConstants::DECLINED => "danger",
        StatusConstants::DELETED => "danger",
        TransactionConstants::DEBIT => "danger",
        StatusConstants::CANCELLED => "danger",
        StatusConstants::CLOSED => "danger",
        StatusConstants::UPCOMING => "warning",
        StatusConstants::ONGOING => "success",
    ];

    const WEB_GUARD = "web";
    const PLAN_GUARD = "plan";

    const PERMISSION_GUARDS = [
       self::WEB_GUARD => "Site Role",
       self::PLAN_GUARD => "Subscription Plan"
    ];

   const SUDO_EMAIL = "sudo@amfw.com";

   const ADMIN_PAGINATION_SIZE = 100;

   const ADMIN_USER = "Admin";
   const REGULAR_USER = "User";

}
