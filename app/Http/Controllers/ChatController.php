<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat()
    {
        return view ('petowner_view/chat');
    }

    public function vetchat()
    {
        return view ('vet_view/vet_chat');
    }

    public function supplierchat()
    {
        return view ('supplier_view/supplier_chat');
    }
}
