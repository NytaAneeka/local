<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    public function group() {
        return $this->belongsTo('App\group');
    }

    public function files(){
        return $this->belongsToMany('App\file', 'lecture_file')->withTimestamps();
//        return $this->belongsToMany('App\theme', 'attributals')->withTimestamps();
    }
}
