<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class BlogController extends RoutingController
{
    public function index (){
        $blogs = Blog::latest()->paginate(10);
        return view('frontend.blog',compact('blogs'))

            ->with('i', (request()->input('page', 1) - 1) *5);
        // return view('frontend.blog');
    }

}
