<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{

    static function getAllCars(){
        return self::all();
    }

    //    static function getOwnerCars($ownerID){
//        $cars = self::where("owner_id","=",$ownerID)->get();
//        return $cars;
//    }
}
