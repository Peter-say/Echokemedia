<?php

namespace App\Helpers;

 class  Constants{

   const APP_NAME = '@echokemedia.com';



     const  APPROVED = "Approved";
     const  PENDING = "Pending";
     const  REJECTED = "Rejected";


     const DEBIT_TRANSACTION = "Debit";
     const CREDIT_TRANSACTION = "Credit";


     const ACTIVE = 1;
     const INACTIVE = 0;

     const BOOL_OPTIONS = [
        self::ACTIVE => "Yes",
        self::INACTIVE => "No",
     ];

     
     const VIDEO = "video";
     const MUSIC = "music";



        const WIZKID =  "Wizkid";
        const DAVIDO =  "Davido";
        const BURNABOY =  "Burnaboy";
        const PSQUARE =  "Psquare";
        const DOJAZY =  "Donjazy";
        const JOEBOY =  "Joeboy";
        const TIMAYA =  "Timaya";
        const OLAMIDE =  "Olamide";


     const CATEGORY = [
        self::WIZKID =>  "Wizkid",
        self::DAVIDO =>  "Davido",
        self::BURNABOY =>  "Burnaboy",
        self::PSQUARE => "Psquare",
        self::DOJAZY =>  "Donjazy",
        self::JOEBOY =>  "Joeboy",
        self::TIMAYA =>  "Timaya",
        self::OLAMIDE => "Olamide",
     ];

 }
