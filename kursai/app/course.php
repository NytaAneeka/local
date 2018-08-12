<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function groups() {
        return $this->hasMany('App\group');
    }
}
