<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class AboutController extends RoutingController
{
    public function index (){
        return view('frontend.about');
    }
}
