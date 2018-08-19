<?php

namespace App\Http\Controllers\admin;

use App\course;
use App\group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class GroupsController extends Controller
{
    function index()
    {
        $groups = group::paginate(10);
        $data = array('groups' => $groups);
        return view('admin\groups', $data);
    }

    function newGroup()
    {
        $courses = course::all();
        $lecturers = User::where('type_id', '=', '3')->get();
        $data = array('courses' => $courses, 'lecturers' => $lecturers);
        return view('admin\add_group', $data);
    }

    function addGroup(Request $request)
    {
        $group = new group();
        $group->name = $request->name;
        $group->course_id = $request->courseName;
        $group->user_id = $request->lecturerName;
        $group->start = $request->startDate;
        $group->end = $request->endDate;
        $group->save();
        return redirect()->route('groups');
    }

    function getGroup($id)
    {
        $group = group::find($id);
        $courses = course::all();
        $lecturers = User::where('type_id', '=', '3')->get();
        $data = array('group' => $group, 'courses' => $courses, 'lecturers' => $lecturers);
        return view('admin\edit_groups', $data);
    }

    function updateGroup(Request $request, $id)
    {
        $group = group::find($id);
        $group->name = $request->name;
        $group->course_id = $request->courseName;
        $group->user_id = $request->lecturerName;
        $group->start = $request->startDate;
        $group->end = $request->endDate;
        $group->save();
        return redirect()->route('groups');
    }

    function deleteGroup($id)
    {
        $group = group::find($id);
        $group->delete();
        return redirect()->route('groups');
    }

    function getEmail($id)
    {
        $group = group::find($id);
        $data = array('group' => $group);
        return view('admin\send_mass_email', $data);
    }

    function sendEmail(Request $request, $id)
    {
        $group = group::find($id);
        $message = $request->message;
        $name = 'BalticTalents';
        $email = 'testforcourses@gmail.com';
        $title = 'Mass group message from lecturer';
        foreach ($group->users as $user) {
            $receiver = $user->email;
            $data = array(
                'name' => $name,
                'title' => $title,
                'email' => $email,
                'msg' => $message,
            );
            Mail::send('admin\message', $data, function ($msg) use ($email, $name, $receiver, $title) {
                $msg->from($email, $name);
                $msg->to("$receiver")->subject($title);
            });
        }
        return redirect()->route('groups');
    }

}
