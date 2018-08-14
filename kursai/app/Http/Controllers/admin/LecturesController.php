<?php

namespace App\Http\Controllers\admin;


use App\group;
use App\lecture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LecturesController extends Controller
{
    function index(){
        $lectures = lecture::paginate(10);
        $data=array('lectures'=>$lectures);
        return view('admin\lectures', $data);
    }

    function newLecture(){
        $groups=group::all();
        $data=array('groups'=>$groups);
        return view('admin\add_lecture',$data);
    }

    function addLecture(Request $request){
        $lecture=new lecture();
        $lecture->name=$request->name;
        $lecture->description=$request->description;
        $lecture->group_id=$request->group_id;
        $lecture->date=$request->date;
        $lecture->save();
        return redirect()->route('lectures');
    }

    function getLecture($id){
        $lecture= lecture::find($id);
        $group=group::all();
        $data=array('group'=>$group,'lecture'=>$lecture);
        return view('admin\edit_lecture',$data);
    }

    function updateLecture(Request $request,$id){
        $lecture= lecture::find($id);
        $lecture->name=$request->name;
        $lecture->description=$request->description;
        $lecture->group_id=$request->group_id;
        $lecture->date=$request->date;
        $lecture->save();
        return redirect()->route('lectures');
    }

    function  deleteLecture($id){
        $lecture=lecture::find($id);
        $lecture->delete();
        return redirect()->route('lectures');
    }

}
