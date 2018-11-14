<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
     * この電話を所有するユーザー
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
