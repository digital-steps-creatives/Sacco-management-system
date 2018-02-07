<?php

namespace App;

trait HasAvatar
{
    public function getAvatarAttribute()
    {
        return $this->avatarPath ? "/storage/app/$this->avatarPath" : null;
    }
}
