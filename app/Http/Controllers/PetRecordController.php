<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetRecordController extends Controller
{
    public function petrecord()
    {
    return view('petowner_view/petrecord');
    }
}
