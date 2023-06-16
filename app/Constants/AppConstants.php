<?php

namespace App\Constants;

class AppConstants
{
    const REGISTER_BONUS = 250000;
    const ZERO = 0;
    const ONE = 1;

    const MAX_PROFILE_PIC_SIZE = 2048;

    const SUPER_ADMIN = 'Super-Admin';
    const ADMIN = 'Admin';
    const MODERATOR = 'Moderator';
    const AUTHOR = 'Author';

     const ROLES = [
       self::SUPER_ADMIN,
       self::ADMIN,
       self::MODERATOR,
       self::AUTHOR,
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

   const dashboard_PAGINATION_SIZE = 100;

   const dashboard_USER = "dashboard";
   const REGULAR_USER = "User";

}
