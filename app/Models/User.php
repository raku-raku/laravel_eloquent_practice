<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * このユーザが持つ電話
     */
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    /**
     * このユーザーが投稿した記事
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * このユーザーが投稿した動画
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    
    /**
     * このユーザーが所属するロール
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class)
            ->withPivot('column1', 'column2')
            ->withTimestamps();
    }
}
