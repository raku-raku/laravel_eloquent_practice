<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * ロールを所有するユーザ
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('column1', 'column2')
            ->withTimestamps();
    }


    public function xxxUsers()
    {
        return $this->users()
            ->wherePivot('column1', 'xxx')
            ->wherePivotIn('column2', ['xxx', 'yyy']);
    }
}
