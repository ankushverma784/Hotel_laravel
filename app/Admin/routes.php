<?php
// namespace App\Http\Controllers\Admin;
// use App\Admin\Controllers\App\Admin\Controllers\BlogController;
// use App\Admin\Controllers\BlogController;
// use App\Admin\Controllers\RestaurantsController;

// use App\Admin\Controllers\RoomsController;
use Illuminate\Routing\Router;
use App\Models\blogs;
use App\Models\Blog;
use App\Models\Rooms;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('blogs', BlogController::class);
    $router->resource('restaurants', RestaurantsController::class);
    $router->resource('rooms',RoomsController::class);

});
