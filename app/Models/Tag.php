<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * このタグをつけた記事
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * このタグをつけたビデオ
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
