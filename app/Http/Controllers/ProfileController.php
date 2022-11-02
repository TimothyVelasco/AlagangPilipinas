<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vet;

class ProfileController extends Controller
{
    public function profile()
    {
        $users = User::where('id', Auth::user()->id)
        ->get();
        //dd($users);
        return view('petowner_view/profile',[
            'users'=>$users
        ]);

    }

    public function supplier_profile()
    {
        $users = User::where('id', Auth::user()->id)
        ->get();
    return view('supplier_view/supplier_profile',[
        'users'=>$users
    ]);

    }

    public function vet_profile()
    {
        $users = User::where('id', Auth::user()->id)
        ->get();
        
    return view('vet_view/vet_profile',[
        'users'=> $users
    ]);
    }
}
