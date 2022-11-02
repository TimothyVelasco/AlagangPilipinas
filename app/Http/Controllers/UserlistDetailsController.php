<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserlistDetailsController extends Controller
{
    public function userdetails(Request $request)
    {
        $id = $request->get('id');
        $user = User::where('id', $id)->first();
        //dd($product_sell);
        return view('admin_view/profiles',[
            'user' => $user
        ]);
    }
}
