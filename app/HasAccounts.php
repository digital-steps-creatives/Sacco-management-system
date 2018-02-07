<?php

namespace App;

trait HasAccounts
{
    /**
     * a member has many accounts.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    /**
     * Adds an account.
     */
    public function addAccount()
    {
        return $this->accounts()->create([]);
    }
}
