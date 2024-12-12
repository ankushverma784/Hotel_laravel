<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\RestaurantController;
use App\Http\Controllers\frontend\RoomsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get ('/', [HomeController::class, 'index' ]);
Route::get ('about', [AboutController::class, 'index' ]);
Route::get ('blog', [BlogController::class, 'index' ]);
Route::get ('contact', [ContactController::class, 'index' ]);
Route::get ('restaurant', [RestaurantController::class, 'index' ]);
Route::get ('rooms', [RoomsController::class, 'index' ]);

Route::resource('products', ProductController::class);
Route::resource('posts', PostController::class);
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('payment', function () { return view('payment');  });

// Route::get('/suplier/transaction', function () { return view('admin/suplier/transaction'); });

// Route::resource('suplier', SuplierController::class);
