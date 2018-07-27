<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);

        \Auth::login($user);

        return redirect()->route('admin.home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('home');
    }
}
