<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function course() {
        return $this->belongsTo('App\course');
    }
    public function users() {
        return $this->belongsToMany('App\User');
    }
    public function user() {
        return $this->belongsTo('App\User');

    }
    public function lectures() {
        return $this->hasMany('App\lecture');
    }
}
