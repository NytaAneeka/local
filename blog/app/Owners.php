<?php

namespace App;

use App\Cars;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    static function getAllOwners(){

        $owners = self::all();
        $owners = $owners->toArray();
        $newArr = array();

        foreach ($owners as $owner){
            $carCount = Owners::getOwnerCars($owner['id']);
            $owner['car_count'] = $carCount;
            $newArr[] = $owner;
        }

        return $newArr;

    }

    private static function getOwnerCars($ownerID){
        return Cars::where('owner_id', $ownerID)->count();
    }
}
