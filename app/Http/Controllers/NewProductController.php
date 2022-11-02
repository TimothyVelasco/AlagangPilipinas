<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewProductController extends Controller
{
    public function newproduct()
    {
        return view ('petowner_view/newproduct');
    }
}
