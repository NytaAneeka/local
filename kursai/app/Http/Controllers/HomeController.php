<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    function getUserDetails(){
        $user=Auth::user();
        $data = array('user'=>$user);
        return view('edit_account',$data);
    }

    function updateUserDetails(Request $request){


        $user=Auth::user();

        if($request->email === $user->email) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:30',
                'lastname' => 'required|string|max:30',
                'phone' => 'required|numeric|digits:11',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }else {
            $validatedData = $request->validate([
                'name' => 'required|string|max:30',
                'lastname' => 'required|string|max:30',
                'phone' => 'required|numeric|digits:11',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $user->email = $validatedData['email'];
        }

        $user->name = $validatedData['name'];
        $user->lastname = $validatedData['lastname'];
        $user->phone = $validatedData['phone'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        return redirect()->route('home');
    }
}
