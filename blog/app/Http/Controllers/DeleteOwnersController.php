<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteOwnersController extends Controller {

    public function index(){
        $owners = DB::select('select * from owners');
        return view('owners_delete',['owners'=>$owners]);
    }

    public function destroy($id) {
        DB::delete('delete from owners where id = ?',[$id]);


//        UPDATE by DK

//        echo "Record deleted successfully.";
//        echo 'Click Here to go back.';

        return view('success', ["data"=>"Record deleted successfully."]);
    }

}