<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierLoginController extends Controller
{
    public function supplierlogin()
    {
        return view('supplierlogin');
    }
    

    public function suppliersignin(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type' => 3
        ];
        $rememberMe = true;

        return (Auth::attempt($credentials, $rememberMe)) ? redirect(route('supplierhomepage.homepage')) : redirect(route('supplierlogin.supplierlogin',['signin'=>false]));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('supplierlogin.supplierlogin'));
    }

}