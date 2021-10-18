<?php

namespace app\Helpers;

 class  Constants{

     const  APPROVED = "aproved";
     const  PENDING = "pending";
     const  REJECTED = "rejected";


     const DEBIT_TRANSACTION = "Debit";
     const CREDIT_TRANSACTION = "Credit";


     const ACTIVE = 1;
     const INACTIVE = 0;

     const BOOL_OPTIONS = [
        self::ACTIVE => "Yes",
        self::INACTIVE => "No",
     ];

     const MUSIC = "Blog";
     const VIDEO = "Vlog";
 }