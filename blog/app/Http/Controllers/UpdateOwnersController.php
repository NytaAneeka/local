<?php
namespace App\Http\Controllers;

use App\Owners;
use Illuminate\Http\Request;
//use DB;
//use App\Http\Requests;

class UpdateOwnersController extends Controller {

    public function updateOwnersForm(Request $request,$id){

        if (isset($id)) {

            $owner = Owners::find($id);
            $data = array('owner'=>$owner);
            return view('updateOwners',$data);
        }

        return redirect()->back();
    }

    public function saveOwnersForm(Request $request,$id){

        if (isset($id)) {

            $owner = Owners::find($id);
            $owner->name=$request->name;
            $owner->surname=$request->surname;
            $owner->save();

        }
        return redirect()->route('owners');
    }

}