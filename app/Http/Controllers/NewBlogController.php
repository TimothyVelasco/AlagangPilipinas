<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewBlog;

class NewBlogController extends Controller
{
    public function newblog(Request $request){

        $header = $request->get('header');
        $body = $request->get('body');
        $blogs = new NewBlog;
        $blogs ->header = $header;
        $blogs ->body = $body;
        $blogs ->save();

        return redirect(route("myblogs.myblogs"));

    }
}
