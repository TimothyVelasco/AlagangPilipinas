<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function userlist()
    {
        $users = User::all();
        //dd($users);
        return view('admin_view/admin', [
            'users' => $users
        ]);
    }

    
}
