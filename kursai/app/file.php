<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    public function lecture() {
        return $this->belongsTo('App\lecture');
    }
}
