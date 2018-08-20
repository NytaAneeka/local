<?php

namespace App\Http\Controllers\admin;

use App\group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    function index()
    {
        $users = User::where('type_id', '=', '2')->paginate(10);
        $data = array('users' => $users);
        return view('admin\students', $data);
    }

    public function addStudent()
    {
        return view('admin\add_student');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->lastname = $validatedData['lastname'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->type_id = 2;
        $user->save();
        return redirect()->route('students');
    }

    public function getStudent($id)
    {
        $user = User::find($id);
        $groups = group::all();
        $groupID = array();
        foreach ($user->groups as $group) {
            $groupID[] = $group->id;
        }
        $data = array('user' => $user, 'groups' => $groups, 'user_groups' => $groupID);
        return view('admin\edit_student', $data);
    }

    function updateStudent(Request $request,$id){
        $user= User::find($id);
        if($request->email === $user->email) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:30',
                'lastname' => 'required|string|max:30',
                'phone' => 'required|numeric|digits:11',
            ]);
        }else {
            $validatedData = $request->validate([
                'name' => 'required|string|max:30',
                'lastname' => 'required|string|max:30',
                'phone' => 'required|numeric|digits:11',
                'email' => 'required|string|email|max:255|unique:users',
            ]);
            $user->email = $validatedData['email'];
        }

        $user->name = $validatedData['name'];
        $user->lastname = $validatedData['lastname'];
        $user->phone = $validatedData['phone'];
        $user->groups()->sync($request->groups);
        $user->save();
        return redirect()->route('students');
    }

    function  deleteStudent($id){
        $user=user::find($id);
        $user->delete();
        return redirect()->route('students');
    }

    function unconfirmedStudents(){
        $users = User::where('type_id', '=', '1')->paginate(10);
        $data = array('users' => $users);
        return view('admin\unconfirmed_students', $data);
    }
    function confirmStudent($id) {
        $user=user::find($id);
        $user->type_id=2;
        $user->save();
        return redirect()->back();
    }

    function getEmail($id){
        $user=user::find($id);
        $data = array('user' => $user);
        return view('admin\send_email', $data);
    }

    function sendEmail(Request $request)
    {
        $receiver = $request->email;
        $message = $request->message;
        $name = 'BalticTalents';
        $email = 'testforcourses@gmail.com';
        $title = 'Personal message from lecturer';

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
        return redirect()->route('students');
    }

    function unconfirmedMiddleware(){
        return view('notStudent');
    }

    function getStudentGroup(){
        $user=Auth::user();
        $data=array('user'=>$user);
        return view('student_groups',$data);
    }
    function getStudentLectures($id){
        $user=Auth::user();
        $userGroups = $user->groups;
        $group = group::find($id);
        $grupes = array();
        foreach($userGroups as $ugroup){
            $grupes[] = $ugroup->id;
        }
        if(in_array($group->id, $grupes)){
            $inGroup = true;
        }
        $lectures = $group->lectures()->paginate(10);
        $data=array('user'=>$grupes, 'lectures'=>$lectures, 'inGroup' =>$inGroup );
        return view('student_lectures',$data);
    }
}
