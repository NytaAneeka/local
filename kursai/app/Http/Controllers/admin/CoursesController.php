<?php

namespace App\Http\Controllers\admin;

use App\course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    function index(){
        $courses = course::paginate(10);
        $data=array('courses'=>$courses);
        return view('admin\courses', $data);
    }

    function getCourse($id){
        $course= course::find($id);
        $data=array('course'=>$course);
        return view('admin\edit_courses',$data);
    }

    function updateCourse(Request $request,$id){
        $course= course::find($id);
        $course->name=$request->name;
        $course->save();
        return redirect()->route('courses');
    }

    function  deleteCourse($id){
        $course=course::find($id);
        $course->delete();
        return redirect()->route('courses');
    }

    function newCourse(){
        return view('admin\add_course');
    }

    function addCourse(Request $request){
        $course=new course();
        $course->name=$request->name;
        $course->save();
        return redirect()->route('courses');
    }
}
