<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function registerUser(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:12',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Registered Successfully');
            var_dump($res);
        } else {
            return back()->with('falied', 'Something Went Wrong');

        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with("failed", "Password Not Match");
            }
        } else {
            return back()->with("failed", "This is email is not registered");
        }
    }

    public function dashboard(Request $request)
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=',  Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function adminLogin()
    {
        return view('auth.login-admin');
    }
}
