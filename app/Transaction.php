<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function transactable()
    {
        return $this->morphTo();
    }

    public static function lastBalance()
    {
        return self::latest()->first()->balance;
    }

    protected static function booted()
    {
        self::saving( function($transaction) {
            if ( $transaction->transactable_type === 'App\Customer' ) {
                $rebate = $transaction->amount * $transaction->rebate;

                $transaction->rebate = $rebate;
                $transaction->balance = self::lastBalance() - ($transaction->amount - $rebate);
            } else {
                $transaction->balance = self::lastBalance() + $transaction->amount;
            }
        });
    }
}
