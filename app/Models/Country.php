<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * この国に所属するユーザーの記事
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * この国に所属するユーザーの記事
     */
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
