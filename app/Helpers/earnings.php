<?php

namespace App\Helpers;


use App\Models\User;
use App\Models\Earnings as ModelsEarnings;
use App\Models\Transaction;

class earnings{


    public static function get(User $user)
    {
        $wallet = $user->wallet;

        if (empty($wallet)) {
            $wallet = ModelsEarnings::create([
                "user_id" => $user->id,
                "balance" => 0,
                "pin" => null
            ]);
        }

        return $wallet;
    }

    public static function credit(User $user, $amount, $description, $status, bool $updateWallet = true, bool $withTransaction = true)
    {
        if ($updateWallet) {
            $wallet = self::get($user);
            $wallet->update([
                "balance" => $wallet->balance + $amount
            ]);
        }

        if ($withTransaction) {
            Transaction::create([
                "user_id" => $user->id,
                "reference" => Transaction::genReference(),
                "amount" => $amount,
                "fee" => 0,
                "total" => $amount,
                "type" => Constants::CREDIT_TRANSACTION,
                "description" => $description,
                "status" => $status
            ]);
        }
    }
}