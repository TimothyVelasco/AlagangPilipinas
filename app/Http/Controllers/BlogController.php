<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewBlog;

class BlogController extends Controller
{
    public function blog()
    {
        $new_blogs = NewBlog::all();
        //dd($new_blogs);
        return view('Petowner_view/lostpet',[
            'new_blogs' => $new_blogs
        ]);
    }

    public function vet_blog()
    {
        return view('vet_view/vet_blog');
    }

    public function supplierblog()
    {
        return view('supplier_view/supplier_blog');
    }

}
