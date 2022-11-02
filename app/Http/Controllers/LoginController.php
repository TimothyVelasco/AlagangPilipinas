<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ]);
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type' => 1
        ];
        $rememberMe = true;

        return (Auth::attempt($credentials, $rememberMe)) ? redirect(route('homepage.homepage')) : redirect(route('login.login',['signin'=>false]));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login.login'));
    }
}
