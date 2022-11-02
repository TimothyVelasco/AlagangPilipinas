<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomepageController extends Controller
{
    public function homepage()
    {

        $users = User::where('id', Auth::user()->id)
        ->get();
        return view('petowner_view/homepage',[
        'users'=>$users    
        ]);
    }

    public function vethomepage()
    {
        $users = User::where('id', Auth::user()->id)
        ->get();
        return view('vet_view/vet_homepage',[
        'users'=>$users    
        ]);
 
    }
    public function supplierhomepage()
    {
        $users = User::where('id', Auth::user()->id)
        ->get();
        return view('supplier_view/supplierhomepage',[
        'users'=>$users    
        ]);
    }
}
