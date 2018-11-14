<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * この記事を所有するユーザー
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * この記事に紐付くコメント
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * この記事に対する全タグ
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
