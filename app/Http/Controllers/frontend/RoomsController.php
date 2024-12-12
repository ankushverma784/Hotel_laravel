<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class RoomsController extends RoutingController
{
    public function index (){
        $rooms = Rooms::latest()->paginate(10);
        return view('frontend.rooms',compact('rooms'))
        ->with('i', (request()->input('page', 1) - 1) *5);

        // return view('frontend.rooms');
    }
}
