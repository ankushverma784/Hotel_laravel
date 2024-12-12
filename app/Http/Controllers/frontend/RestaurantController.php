<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class RestaurantController extends RoutingController
{
    public function index (){
        $restaurants = Restaurants::latest()->paginate(10);



        return view('frontend.restaurant',compact('restaurants'))

            ->with('i', (request()->input('page', 1) - 1) *5);

        // return view('frontend.restaurant');
    }


    // public function show(restaurants $restaurant)
    // {
    //     return view('restaurant.show',compact('restaurant'));
    // }
}
