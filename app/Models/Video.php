<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * このビデオを所有するユーザー
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このビデオに紐づくコメント
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * このビデオにに対する全タグ
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
