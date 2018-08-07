<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Cars;
use Illuminate\Http\Request;

class AddCarController extends Controller
{
    public function showOwnersInForm(){

        $owners = Owners::all();
        $owners = $owners->toArray();
        return view('addCar', ['owners'=>$owners]);

    }

    public function saveCarData(Request $data){

        $car                = new Cars;
        $car->reg_number    = $data->car_reg;
        $car->brand         = $data->car_brand;
        $car->model         = $data->car_model;
        $car->owner_id      = $data->owner_id;
        $car->save();

        return redirect()->route('cars');

    }
}
