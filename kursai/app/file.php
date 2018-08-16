<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    public function lectures() {
        return $this->belongsToMany('App\lecture', 'lecture_file')->withTimestamps();
    }
}
