<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutme()
    {
        return view('petowner_view/aboutme');
    }
}
