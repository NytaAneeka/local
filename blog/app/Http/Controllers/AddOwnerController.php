<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Cars;
use Illuminate\Http\Request;

class AddOwnerController extends Controller
{
    public function showForm(){

        $unusedCars = Cars::where('owner_id', 0)
            ->select('brand','model','id')
            ->orderBy('brand')
            ->get();
        $unusedCars = $unusedCars->toArray();
        return view('addOwner', ['unusedCars'=>$unusedCars]);

    }

    public function saveFormData(Request $data){

        $owner          = new Owners;
        $owner->name    = $data->owner_name;
        $owner->surname = $data->owner_surname;
        $owner->save();

        $carId          = $data->empty_car;
        $newOwnerId     = $owner->id;

        if(!empty($carId)){
            $updatedCar = Cars::find($carId);
            $updatedCar->owner_id = $newOwnerId;
            if($updatedCar->save()){
                return redirect()->route('owners');
            }else{
                Cars::abort(500, 'Error');
            }
        }else{
            return redirect()->route('owners');
        }



    }
}
