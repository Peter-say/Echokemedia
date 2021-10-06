<?php

namespace App\Helpers;

use App\Helpers\Wallet as HelpersWallet;
use App\Models\Earnings;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet as ModelsWallet;

class Wallet
{


    public static function get(User $user)
    {
        $balance = 0;
        $amount = 100;
        $wallet = $user->wallet;
        $total = $balance + $amount;

        if (empty($wallet)) {
            $wallet = ModelsWallet::create([
                "user_id" => $user->id,
                "balance" => 100,
                "pin" => null
            ]);
        }
        return $total;
    }

}
