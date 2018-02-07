<?php

namespace App;

use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Member extends User
{
    use Notifiable,HasAccounts,HasAvatar;

    protected $appends = ['avatar'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phoneNumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * cast the following fields to native arrays.
     *
     * @var array
     */
    protected $casts = ['isAdmin' => 'boolean'];

    /**
     * hook into the booting process of the model.
     */
    public static function boot()
    {
        static::creating(function ($member) {
            $member->setDefaultPassword();
        });
    }

    /**
     * generate a default password for the member.
     *
     * @return self
     */
    public function setDefaultPassword()
    {
        $this->password = bcrypt($this->phoneNumber);

        return $this;
    }

    /**
     * gets all Members.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public static function getAll()
    {
        return static::oldest('name')->get()->keyBy('id');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
