<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $loginWasSuccessful = Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if ($loginWasSuccessful) {
            return redirect('/admin')
              ->with('successStatus','Login Successful');
        } else {
            return redirect('/login')
            ->withErrors($loginWasSuccessful);
        }
        $user = Auth::user(); //refer to the new User class (model) to retrieve name in the index

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
