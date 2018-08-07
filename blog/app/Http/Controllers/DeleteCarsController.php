<?php
namespace App\Http\Controllers;

use DB;

class DeleteCarsController extends Controller {

    public function index(){
        $cars = DB::select('select * from cars');
        return view('cars_delete',['cars'=>$cars]);
    }

    public function destroy($id) {
        DB::delete('delete from cars where id = ?',[$id]);

//        echo "Record deleted successfully.";
//        echo 'Click Here to go back.';

        return view('success', ["data"=>"Record deleted successfully."]);
    }

}