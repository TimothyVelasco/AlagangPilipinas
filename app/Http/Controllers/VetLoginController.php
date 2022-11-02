<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Vet;

class VetLoginController extends Controller
{
    public function vetlogin()
    {
        return view('vetlogin');
    }

    public function vetsignin(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ]);
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type' => 2
        ];
        $rememberMe = true;

        return (Auth::attempt($credentials, $rememberMe)) ? redirect(route('vethomepage.homepage')) : redirect(route('vetlogin.vetlogin',['signin'=>false]));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('vetlogin.vetlogin'));
    }
}
