<?php

namespace App\Http\Controllers\Dashboard;

use app\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function witdraw( Request $request)
    {
        $user_id = $request->user_id;

        $queryBuilder = Transaction::whereHas("user")
            ->with("user")
            ->orderby("created_at", "desc");

        if (!empty($user_id)) {
            $queryBuilder = $queryBuilder->where("user_id", $user_id);
        }
        $withdrawals = $queryBuilder->get();
        return view('dashboards.transaction.index' , compact('withdrawals'));
    }

    public static function get(User $user)
    {
        $wallet = $user->wallet;

        if (empty($wallet)) {
            $wallet = Wallet::create([
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
               
            ]);
        }
    }

    public static function debit(User $user, $amount, $fee, $description, $status, bool $updateWallet = true, bool $withTransaction = true)
    {
        if ($updateWallet) {
            $wallet = self::get($user);
            $total = $amount + $fee;

            $wallet->update([
                "balance" => $wallet->balance - $total
            ]);
        }

        if ($withTransaction) {
            Transaction::create([
                "user_id" => $user->id,
                "reference" => Transaction::genReference(),
                "amount" => $amount,
                "fee" => $fee,
                "total" => $total,
                "type" => Constants::DEBIT_TRANSACTION,
                "description" => $description,
                "status" => $status
            ]);
        }
    }

}
