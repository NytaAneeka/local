<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use App\Http\Requests;

class UpdateCarsController extends Controller
{
    public function updateForm(Request $request,$id){

        if (isset($id)) {

            $car = Cars::find($id);
            $data = array('car'=>$car);
            return view('updateCars',$data);

        }

        return redirect()->back();
    }


    public function saveForm(Request $request,$id){

        if (isset($id)) {

            $car = Cars::find($id);
            $car->reg_number    =   $request->regNumber;
            $car->brand         =   $request->brand;
            $car->model         =   $request->model;
            $car->owner_id      =   $request->owner_id;
            $car->save();

            //DK fix, return to all cars after update
            return redirect()->route('cars');
        }

        //this doesnt work
        return redirect()->route('cars');
    }
}
