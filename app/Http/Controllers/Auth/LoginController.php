<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function signup(){
        return view('signup');
    }

    function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('welcome'));
        }
        return redirect('/')->with("error","Login details are not valid");
    }

    function signupPost(Request $request){
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'bday' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
 
        ]);

        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['phone'] = $request->phone;
        $data['bday'] = $request->bday;
        $data['gender'] = $request->gender;
        $data['hnumber'] = $request->hnumber;
        $data['street'] = $request->street;
        $data['sitio'] = $request->sitio;
        $data['brgy'] = $request->brgy;
        $data['city'] = $request->city;
        $data['zip'] = $request->zip;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->input('password'));
        $user = User::create($data);
        if($user){
            return redirect('/')->with("success","Registration successful. Please login to continue.");
        } else {

        }   
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('status', 'You have been logged out successfully.');
    }
}
