<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewBlog;

class MyBlogsController extends Controller
{
    public function myblogs()
    {
        $new_blogs = NewBlog::all();
        //dd($new_blogs);
        return view('Petowner_view/myblogs',[
            'new_blogs' => $new_blogs
        ]);
    }

    public function vetmyblogs()
    {
    return view('vet_view/vet_myblogs');
    }

    public function suppliermyblogs()
    {
    return view('supplier_view/supplier_myblogs');
    }
}
