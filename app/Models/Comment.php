<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body'
    ];

    /**
     * このコメントを所有するcommentableモデル
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
