<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * hook into the booting process of the model.
     */
    public static function boot()
    {
        static::creating(function ($account) {
            $account->number = $account->generateNumber();
        });
    }
    /**
     * generate a random number for the user
     *
     * @return     string
     */

    public function generateNumber()
    {
        $latestId = (int) optional(static::latest('id')->first())->id + 1;

        return sprintf('FIC/%s/%s', date('y'), str_pad($latestId, 6, 0, STR_PAD_LEFT));
    }
}
