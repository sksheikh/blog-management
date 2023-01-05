<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'blogs'=>Blog::latest()->get(),
        ]);
    }

    public function blogDetails($id)
    {
        return view('front.blog.details',[
            'blog'=>Blog::find($id),
        ]);
    }


}
